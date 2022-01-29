<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="index.html">Zion</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">Zn</a>
        </div>

        <ul class="sidebar-menu">
            <li class="menu-header">Dashboard</li>
            <li class="dropdown active">
                <a href="#" class="nav-link has-dropdown">
                    <i class="fas fa-fire"></i>
                    <span>Dashboard</span>
                </a>
                <ul class="dropdown-menu">
                    <li class="{{ request()->is('/') ? 'active' : '' }}">
                        <a class="nav-link" href="/">Dashboard</a>
                    </li>
                </ul>
            </li>
        </ul>

        <ul class="sidebar-menu">
            <li class="menu-header">Data</li>
            <li class="dropdown active">
                <a href="/outlet" class="nav-link">
                    <i class="fas fa-fire"></i>
                    <span>Outlet</span>
                </a>
            </li>
        </ul>
    </aside>
</div>
