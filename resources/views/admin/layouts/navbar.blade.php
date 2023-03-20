<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="{{route('admin.')}}"> <img alt="image" src="/admin/assets/img/logo.png" class="header-logo" /> <span
                    class="logo-name">Otika</span>
            </a>
        </div>
        <ul class="sidebar-menu">

            <li class="dropdown @yield('dashboard')">
                <a href="/a-panel" class="nav-link"><i data-feather="monitor"></i><span>Dashboard</span></a>
            </li>
            <li class="dropdown @yield('index_content')">
                <a href="{{route('admin.category.index')}}"><i data-feather="briefcase"></i><span>Kategoriyalar</span></a>
            </li>
            <li class="dropdown @yield('index_content')">
                <a href="{{route('admin.posts.index')}}"><i data-feather="briefcase"></i><span>Postlar</span></a>
            </li>

        </ul>
    </aside>
</div>
