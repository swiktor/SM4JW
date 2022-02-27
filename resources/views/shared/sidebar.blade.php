<div class="sb-sidenav-menu-heading">Dashboard</div>
<nav class="sb-sidenav-menu-nested">
    <a class="nav-link" href="{{ route('dashboard.ministry') }}">
        <div class="sb-nav-link-icon"><i class="fas fa-list"></i></div>
        Nadchodzące służby
    </a>
</nav>
<nav class="sb-sidenav-menu-nested">
    <a class="nav-link" href="{{ route('dashboard.coworker') }}">
        <div class="sb-nav-link-icon"><i class="fas fa-list"></i></div>
        Współpracownicy
    </a>
</nav>
<nav class="sb-sidenav-menu-nested">
    <a class="nav-link" href="{{ route('dashboard.report') }}">
        <div class="sb-nav-link-icon"><i class="fas fa-list"></i></div>
        Sprawozdanie
    </a>
</nav>
<div class="sb-sidenav-menu-heading">Służby</div>
<nav class="sb-sidenav-menu-nested">
    <a class="nav-link" href="{{ route('ministry.index') }}">
        <div class="sb-nav-link-icon"><i class="fas fa-list"></i></div>
        Lista
    </a>
{{--    <a class="nav-link" href="{{ route('ministry.proposal') }}">--}}
{{--        <div class="sb-nav-link-icon"><i class="fas fa-list"></i></div>--}}
{{--        Propozycje--}}
{{--    </a>--}}
    @if (!auth()->user()->googleAccounts->isEmpty())
        <a class="nav-link" href="{{ route('ministry.create') }}">
            <div class="sb-nav-link-icon"><i class="fas fa-plus"></i></div>
            Umów
        </a>
    @endif

</nav>

<div class="sb-sidenav-menu-heading">Współpracownicy</div>
<nav class="sb-sidenav-menu-nested">
    <a class="nav-link" href="{{ route('coworker.list') }}">
        <div class="sb-nav-link-icon"><i class="fas fa-list"></i></div>
        Lista
    </a>
    <a class="nav-link" href="{{ route('coworker.never') }}">
        <div class="sb-nav-link-icon"><i class="fas fa-list"></i></div>
        Ci co nigdy
    </a>
    <a class="nav-link" href="{{ route('coworker.add.form') }}">
        <div class="sb-nav-link-icon"><i class="fas fa-plus"></i></div>
        Dodaj
    </a>
</nav>

<div class="sb-sidenav-menu-heading">Zbory</div>
<nav class="sb-sidenav-menu-nested">
    <a class="nav-link" href="{{ route('congregation.list') }}">
        <div class="sb-nav-link-icon"><i class="fas fa-list"></i></div>
        Lista
    </a>
    <a class="nav-link" href="{{ route('congregation.add.form') }}">
        <div class="sb-nav-link-icon"><i class="fas fa-plus"></i></div>
        Dodaj
    </a>
</nav>

<div class="sb-sidenav-menu-heading">Grupy (Work in progress)</div>
<nav class="sb-sidenav-menu-nested">
    <a class="nav-link" href="{{ route('team.list') }}">
        <div class="sb-nav-link-icon"><i class="fas fa-list"></i></div>
        Lista
    </a>
    <a class="nav-link" href="{{ route('team.add.form') }}">
        <div class="sb-nav-link-icon"><i class="fas fa-plus"></i></div>
        Dodaj
    </a>
</nav>
