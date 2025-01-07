<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="{{ route('dashboardadmin') }}" class="nav-link">Home</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="#" class="nav-link">Notification</a>
        </li>

    </ul>

    <ul class="navbar-nav ml-auto">
        <li>
            <i class="fa fa-bell" aria-hidden="true"></i>
        </li>
        <li>
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit" class="dropdown-item">
                    <i class="fas fa-sign-out-alt mr-2"></i> Log Out
                </button>
            </form>
        </li>
    </ul>
</nav>
