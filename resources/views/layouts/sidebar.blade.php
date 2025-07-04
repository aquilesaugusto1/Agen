<div class="flex flex-col w-64 bg-slate-900 text-slate-300">
    <div class="flex items-center justify-center h-16 bg-slate-950">
        <a href="{{ route('dashboard') }}" class="flex items-center space-x-3">
            <img class="h-8 w-auto" src="{{ asset('images/logo-agen.png') }}" alt="Logo da Agen">
            <span class="text-2xl font-bold text-slate-200">Agen</span>
        </a>
    </div>
    <nav class="flex-1 px-2 py-4 space-y-1">
        <a href="{{ route('dashboard') }}" class="flex items-center px-4 py-2.5 rounded-lg transition-colors duration-200 {{ request()->routeIs('dashboard') ? 'bg-indigo-600 text-white' : 'hover:bg-slate-800 text-slate-300' }}">
            <svg class="h-5 w-5 mr-3" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12l8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h7.5" /></svg>
            Início
        </a>
        <a href="{{ route('agendas.index') }}" class="flex items-center px-4 py-2.5 rounded-lg transition-colors duration-200 {{ request()->routeIs('agendas.*') ? 'bg-indigo-600 text-white' : 'hover:bg-slate-800 text-slate-300' }}">
            <svg class="h-5 w-5 mr-3" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5m-9-6h.008v.008H12v-.008z" /></svg>
            Agendas
        </a>
        <a href="{{ route('apontamentos.index') }}" class="flex items-center px-4 py-2.5 rounded-lg transition-colors duration-200 {{ request()->routeIs('apontamentos.*') ? 'bg-indigo-600 text-white' : 'hover:bg-slate-800 text-slate-300' }}">
            <svg class="h-5 w-5 mr-3" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
            Apontamentos
        </a>
        <a href="{{ route('relatorios.index') }}" class="flex items-center px-4 py-2.5 rounded-lg transition-colors duration-200 {{ request()->routeIs('relatorios.*') ? 'bg-indigo-600 text-white' : 'hover:bg-slate-800 text-slate-300' }}">
            <svg class="h-5 w-5 mr-3" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M3.75 3v11.25A2.25 2.25 0 006 16.5h2.25M3.75 3h-1.5m1.5 0h16.5m0 0h1.5m-1.5 0v11.25A2.25 2.25 0 0118 16.5h-2.25m-7.5 0h7.5m-7.5 0l-1 1.5m1-1.5l1 1.5m0 0l.5 1.5m.5-1.5l-1.5-2.25m1.5 2.25l1.5-2.25m0 0l1.5 2.25m-1.5-2.25l-1.5 2.25m-7.5 0h7.5" /></svg>
            Relatórios
        </a>

        @if(in_array(auth()->user()->funcao, ['admin', 'techlead']))
            <hr class="my-4 border-slate-700">
            <a href="{{ route('aprovacoes.index') }}" class="flex items-center px-4 py-2.5 rounded-lg transition-colors duration-200 {{ request()->routeIs('aprovacoes.*') ? 'bg-indigo-600 text-white' : 'hover:bg-slate-800 text-slate-300' }}">
                <svg class="h-5 w-5 mr-3" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                Aprovações
            </a>
            <a href="{{ route('sugestoes.index') }}" class="flex items-center px-4 py-2.5 rounded-lg transition-colors duration-200 {{ request()->routeIs('sugestoes.*') ? 'bg-indigo-600 text-white' : 'hover:bg-slate-800 text-slate-300' }}">
                <svg class="h-5 w-5 mr-3" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M12 18v-5.25m0 0a6.01 6.01 0 001.5-.189m-1.5.189a6.01 6.01 0 01-1.5-.189m3.75 7.478a12.06 12.06 0 01-4.5 0m3.75 2.311a15.045 15.045 0 01-7.5 0C4.508 17.67 2.25 15.443 2.25 12.75c0-2.692 2.258-4.92 5.04-5.233.95-.112 1.933-.167 2.96-.167s2.01.055 2.96.167c2.782.313 5.04 2.54 5.04 5.233 0 2.693-2.258 4.92-5.04 5.233z" /></svg>
                Sugestões
            </a>
            <a href="{{ route('email.agendas.create') }}" class="flex items-center px-4 py-2.5 rounded-lg transition-colors duration-200 {{ request()->routeIs('email.agendas.*') ? 'bg-indigo-600 text-white' : 'hover:bg-slate-800 text-slate-300' }}">
                <svg class="h-5 w-5 mr-3" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75" /></svg>
                Enviar Agendas
            </a>
        @endif

        @if(auth()->user()->funcao == 'admin')
            <hr class="my-4 border-slate-700">
            <a href="{{ route('projetos.index') }}" class="flex items-center px-4 py-2.5 rounded-lg transition-colors duration-200 {{ request()->routeIs('projetos.*') ? 'bg-indigo-600 text-white' : 'hover:bg-slate-800 text-slate-300' }}">
                <svg class="h-5 w-5 mr-3" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M20.25 14.15v4.07a2.25 2.25 0 01-2.25 2.25H5.92a2.25 2.25 0 01-2.25-2.25v-4.07a2.25 2.25 0 01.92-1.753l.9-1.35a2.25 2.25 0 013.682-.32L9.9 12.5l.92-1.753a2.25 2.25 0 013.682-.32l.9 1.35a2.25 2.25 0 01.92 1.753z" /><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 19.5h15a2.25 2.25 0 002.25-2.25v-4.07a2.25 2.25 0 00-.92-1.753l-.9-1.35a2.25 2.25 0 00-3.682-.32L9.9 12.5l-.92-1.753a2.25 2.25 0 00-3.682-.32l-.9 1.35A2.25 2.25 0 002.25 13.25v4.07a2.25 2.25 0 002.25 2.25z" /></svg>
                Projetos
            </a>
            <a href="{{ route('consultores.index') }}" class="flex items-center px-4 py-2.5 rounded-lg transition-colors duration-200 {{ request()->routeIs('consultores.*') ? 'bg-indigo-600 text-white' : 'hover:bg-slate-800 text-slate-300' }}">
                <svg class="h-5 w-5 mr-3" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M15 19.128a9.38 9.38 0 002.625.372 9.337 9.337 0 004.121-2.305c.395-.44-.22-1.078-.682-1.078h-4.042a1.125 1.125 0 01-1.125-1.125v-4.042A1.125 1.125 0 019.875 8.25c.662 0 1.185.523 1.185 1.185v4.042a1.125 1.125 0 001.125 1.125h4.042zM18 12.375a6 6 0 11-12 0 6 6 0 0112 0z" /></svg>
                Consultores
            </a>
            <a href="{{ route('empresas.index') }}" class="flex items-center px-4 py-2.5 rounded-lg transition-colors duration-200 {{ request()->routeIs('empresas.*') ? 'bg-indigo-600 text-white' : 'hover:bg-slate-800 text-slate-300' }}">
                <svg class="h-5 w-5 mr-3" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M3.75 21h16.5M4.5 3h15M5.25 3v18m13.5-18v18M9 6.75h1.5m-1.5 3h1.5m-1.5 3h1.5m3-6h1.5m-1.5 3h1.5m-1.5 3h1.5M9 21v-3.375c0-.621.504-1.125 1.125-1.125h3.75c.621 0 1.125.504 1.125 1.125V21" /></svg>
                Clientes
            </a>
            <a href="{{ route('techleads.index') }}" class="flex items-center px-4 py-2.5 rounded-lg transition-colors duration-200 {{ request()->routeIs('techleads.*') ? 'bg-indigo-600 text-white' : 'hover:bg-slate-800 text-slate-300' }}">
                <svg class="h-5 w-5 mr-3" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                Tech Leads
            </a>
        @endif
        
        @if(auth()->user()->funcao == 'techlead')
            <a href="{{ route('consultores.index') }}" class="flex items-center px-4 py-2.5 rounded-lg transition-colors duration-200 {{ request()->routeIs('consultores.*') ? 'bg-indigo-600 text-white' : 'hover:bg-slate-800 text-slate-300' }}">
                <svg class="h-5 w-5 mr-3" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M15 19.128a9.38 9.38 0 002.625.372 9.337 9.337 0 004.121-2.305c.395-.44-.22-1.078-.682-1.078h-4.042a1.125 1.125 0 01-1.125-1.125v-4.042A1.125 1.125 0 019.875 8.25c.662 0 1.185.523 1.185 1.185v4.042a1.125 1.125 0 001.125 1.125h4.042zM18 12.375a6 6 0 11-12 0 6 6 0 0112 0z" /></svg>
                Consultores
            </a>
        @endif
    </nav>
</div>
