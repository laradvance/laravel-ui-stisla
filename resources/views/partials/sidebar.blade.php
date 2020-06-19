<aside id="sidebar-wrapper">
    <div class="sidebar-brand">
        <a href="">{{ env('APP_NAME') }}</a>
    </div>
    <div class="sidebar-brand sidebar-brand-sm">
        <a href="">LA</a>
    </div>
    <ul class="sidebar-menu">
        <li class="menu-header">Dashboard</li>
        <li class="dropdown">
            <a href="#" class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>Dashboard</span></a>
            <ul class="dropdown-menu">
               <li class="{{ request()->is('/') ? 'active' : '' }}"><a class="nav-link" href="{{ url('/') }}"><i class="fas fa-columns"></i> <span>Dashboard</span></a></li>
               <li class="{{ request()->is('table') ? 'active' : '' }}"><a href="{{ url('table') }}"><i class="fas fa-table"></i> <span>Tables</span></a></li>
            </ul>
        </li>
        <li class="menu-header">Starter</li>
        <li class="dropdown">
            <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i> <span>Layout</span></a>
            <ul class="dropdown-menu">
                <li><a class="nav-link" href="">Default Layout</a></li>
                <li><a class="nav-link" href="">Transparent Sidebar</a></li>
                <li><a class="nav-link" href="">Top Navigation</a></li>
            </ul>
        </li>
        <li class=active><a class="nav-link" href="blank.html"><i class="far fa-square"></i> <span>Blank Page</span></a></li>
        <li class="dropdown">
            <a href="#" class="nav-link has-dropdown"><i class="fas fa-th"></i> <span>Bootstrap</span></a>
            <ul class="dropdown-menu">
                <li><a class="nav-link" href="">Alert</a></li>
                <li><a class="nav-link" href="">Badge</a></li>
                <li><a class="nav-link" href="">Breadcrumb</a></li>
                <li><a class="nav-link" href="">Buttons</a></li>
                <li><a class="nav-link" href="">Card</a></li>
                <li><a class="nav-link" href="">Carousel</a></li>
                <li><a class="nav-link" href="">Collapse</a></li>
                <li><a class="nav-link" href="">Dropdown</a></li>
                <li><a class="nav-link" href="">Form</a></li>
            </ul>
        </li>
        <li class="menu-header">Stisla</li>
        <li class="dropdown">
            <a href="#" class="nav-link has-dropdown"><i class="fas fa-th-large"></i> <span>Components</span></a>
            <ul class="dropdown-menu">
                <li><a class="nav-link" href="">Article</a></li>
                <li><a class="nav-link beep beep-sidebar" href="">Avatar</a></li>
                <li><a class="nav-link" href="">Chat Box</a></li>
                <li><a class="nav-link beep beep-sidebar" href="">Empty State</a></li>
                <li><a class="nav-link" href="">Gallery</a></li>
                <li><a class="nav-link beep beep-sidebar" href="">Hero</a></li>
                <li><a class="nav-link" href="">Multiple Upload</a></li>
                <li><a class="nav-link beep beep-sidebar" href="">Pricing</a></li>
                <li><a class="nav-link" href="">Statistic</a></li>
                <li><a class="nav-link beep beep-sidebar" href="">Wizard</a></li>
            </ul>
        </li>
        <li class="dropdown">
            <a href="#" class="nav-link has-dropdown"><i class="far fa-file-alt"></i> <span>Forms</span></a>
            <ul class="dropdown-menu">
                <li><a class="nav-link" href="">Advanced Form</a></li>
                <li><a class="nav-link" href="">Editor</a></li>
                <li><a class="nav-link" href="">Validation</a></li>
            </ul>
        </li>
        <li class="menu-header">Pages</li>
        <li class="dropdown">
            <a href="#" class="nav-link has-dropdown"><i class="far fa-user"></i> <span>Auth</span></a>
            <ul class="dropdown-menu">
                <li><a href="">Forgot Password</a></li>
                <li><a href="">Login</a></li>
                <li><a href="">Register</a></li>
                <li><a href="">Reset Password</a></li>
            </ul>
        </li>
        <li class="dropdown">
            <a href="#" class="nav-link has-dropdown"><i class="fas fa-exclamation"></i> <span>Errors</span></a>
            <ul class="dropdown-menu">
                <li><a class="nav-link" href="">503</a></li>
                <li><a class="nav-link" href="">403</a></li>
                <li><a class="nav-link" href="">404</a></li>
                <li><a class="nav-link" href="">500</a></li>
            </ul>
        </li>
        <li class="dropdown">
            <a href="#" class="nav-link has-dropdown"><i class="fas fa-ellipsis-h"></i> <span>Utilities</span></a>
            <ul class="dropdown-menu">
                <li><a href="">Contact</a></li>
                <li><a class="nav-link" href="">Invoice</a></li>
                <li><a href="">Subscribe</a></li>
            </ul>
        </li>
        <li><a class="nav-link" href=""><i class="fas fa-pencil-ruler"></i> <span>Credits</span></a></li>
    </ul>
    <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
        <a href="https://getstisla.com/docs" class="btn btn-primary btn-lg btn-block btn-icon-split">
        <i class="fas fa-rocket"></i> Documentation
        </a>
    </div>
</aside>
