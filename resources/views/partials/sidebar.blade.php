<nav class="sidebar">
    <div class="logo-wrapper">
        <img src="./assets/images/logo.png" alt="logo" class="logo" height="40">
    </div>
    <div class="group-label-wrapper">
        <span class="group-label">Navigation</span>
    </div>
    <div class="group-menus">
        <a href="#" class="group-menu {{ request()->is('overview') ? 'active' : '' }}">
            <img src="./assets/images/overview.svg" width="21" alt="group-menu-icon" class="group-menu-icon">
            <span class="group-menu-text">Overview</span>
        </a>
        <a href="#" class="group-menu {{ request()->is('users') ? 'active' : '' }}">
            <img src="./assets/images/users.svg" width="21" alt="group-menu-icon" class="group-menu-icon">
            <span class="group-menu-text">Users</span>
        </a>
        <a href="#" class="group-menu {{ request()->is('presences') ? 'active' : '' }}">
            <img src="./assets/images/presences.svg" width="21" alt="group-menu-icon" class="group-menu-icon">
            <span class="group-menu-text">Presences</span>
        </a>
        <a href="#" class="group-menu {{ request()->is('reports') ? 'active' : '' }}">
            <img src="./assets/images/reports.svg" width="21" alt="group-menu-icon" class="group-menu-icon">
            <span class="group-menu-text">Reports</span>
        </a>
    </div>
</nav>