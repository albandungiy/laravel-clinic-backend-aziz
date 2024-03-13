<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            {{-- <a href="index.html">Klinik Kampus</a> --}}
            <img src="{{ asset('img/logo-klinik.png') }}" alt="">
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">St</a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Dashboard</li>
            <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>Dashboard</span></a>
                <ul class="dropdown-menu">
                    <li class='{{ Request::is('dashboard-general-dashboard') ? 'active' : '' }}'>
                        <a class="nav-link" href="{{ url('dashboard-general-dashboard') }}">General Dashboard</a>
                    </li>
                </ul>
                {{-- <ul class="dropdown-menu">
                    <li class=''>
                        <a class="nav-link" href="{{ route('users.index') }}">Users</a>
                    </li>
                </ul> --}}
                <ul class="dropdown-menu">
                    <li class=''>
                        <a class="nav-link" href="{{ route('doctors.index') }}">Doctors</a>
                    </li>
                </ul>
            </li>
            <li><a class="nav-link" href="{{ route('users.index') }}"><i class="far fa-user"></i> <span>Users</span></a></li>
            <li><a class="nav-link" href="{{ route('doctors.index') }}"><i class="fa fa-user-md"></i> <span>Doctors</span></a></li>
    </aside>
</div>
