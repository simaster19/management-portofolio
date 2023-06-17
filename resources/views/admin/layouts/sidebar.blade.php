<div class="sidebar-menu">
    <ul class="menu">
        <li class="sidebar-title">Menu</li>

        <li class="sidebar-item ">
            <a href="{{ route('dashboard') }}" class='sidebar-link'>
                <i class="bi bi-grid-fill"></i>
                <span>Dashboard</span>
            </a>
        </li>

        <li class="sidebar-item  has-sub">
            <a href="#" class='sidebar-link'>
                <i class="bi bi-stack"></i>
                <span>Data Master</span>
            </a>
            <ul class="submenu ">
                <li class="submenu-item ">
                    <a href="{{ route('users.index') }}">Users</a>
                </li>
                <li class="submenu-item ">
                    <a href="{{ route('projects.index') }}">Projects</a>
                </li>

                <li class="submenu-item ">
                    <a href="{{ route('message') }}">Messages</a>
                </li>
                <li class="submenu-item ">
                    <a href="{{ route('skills.index') }}">Skils</a>
                </li>
                <li class="submenu-item ">
                    <a href="{{ route('skills.index') }}">Blog</a>
                </li>
            </ul>
        </li>

        <li class="sidebar-item  ">
            <a href="{{ route('logout') }}" class='sidebar-link'>
                <i class="bi bi-door-closed"></i>
                <span>Logout</span>
            </a>
        </li>
    </ul>
</div>
