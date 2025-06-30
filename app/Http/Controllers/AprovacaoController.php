<?php

namespace App\Http\Controllers;

use App\Models\Apontamento;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AprovacaoController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $query = Apontamento::with('consultor', 'agenda.projeto.empresaParceira')
                            ->where('status', 'Pendente');

        if ($user->funcao === 'techlead') {
            $consultorIds = $user->consultoresLiderados()->pluck('consultores.id');
            $query->whereIn('consultor_id', $consultorIds);
        }

        $apontamentos = $query->latest()->paginate(15);

        return view('aprovacoes.index', compact('apontamentos'));
    }

    public function aprovar(Request $request, Apontamento $apontamento)
    {
        $user = Auth::user();
        $this->authorizeAction($user, $apontamento);

        $validated = $request->validate(['forcar_aprovacao' => 'sometimes|boolean']);
        $forcar = $validated['forcar_aprovacao'] ?? false;

        $empresa = $apontamento->agenda->projeto->empresaParceira;

        if ($empresa->saldo_total < $apontamento->horas_gastas && !$forcar) {
            return back()->withErrors(['geral' => 'O cliente não tem saldo de horas suficiente. Para aprovar mesmo assim, marque a opção "Forçar aprovação".']);
        }

        $apontamento->status = 'Aprovado';
        $apontamento->aprovado_por = $user->id;
        $apontamento->data_aprovacao = now();
        $apontamento->save();
        
        return redirect()->route('aprovacoes.index')->with('success', 'Apontamento aprovado com sucesso! O saldo do cliente foi atualizado.');
    }

    public function rejeitar(Request $request, Apontamento $apontamento)
    {
        $user = Auth::user();
        $this->authorizeAction($user, $apontamento);
        
        $validated = $request->validate(['motivo_rejeicao' => 'required|string|max:500']);

        $apontamento->status = 'Rejeitado';
        $apontamento->motivo_rejeicao = $validated['motivo_rejeicao'];
        $apontamento->aprovado_por = $user->id;
        $apontamento->save();

        return redirect()->route('aprovacoes.index')->with('success', 'Apontamento rejeitado com sucesso.');
    }

    private function authorizeAction($user, $apontamento)
    {
        if ($user->funcao === 'techlead') {
            $isAllowed = $user->consultoresLiderados()->where('consultores.id', $apontamento->consultor_id)->exists();
            if (!$isAllowed) {
                abort(403, 'Ação não autorizada.');
            }
        }
    }
}
