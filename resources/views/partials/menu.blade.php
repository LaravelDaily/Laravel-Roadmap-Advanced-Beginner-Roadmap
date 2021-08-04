<ul class="c-sidebar-nav">
    <li class="c-sidebar-nav-item">
        <a class="c-sidebar-nav-link" href="{{ route('home') }}">
            <i class="c-sidebar-nav-icon fas fa-fw fa-tachometer-alt"></i>
            Dashboard
        </a>
    </li>
    @can('manage users')
        <li class="c-sidebar-nav-item">
            <a class="c-sidebar-nav-link {{ request()->is("users/*") ? "c-active" : "" }}" href="{{ route('users.index') }}">
                <i class="c-sidebar-nav-icon fas fa-fw fa-tachometer-alt"></i>
                Users
            </a>
        </li>
    @endcan
    <li class="c-sidebar-nav-item">
        <a class="c-sidebar-nav-link {{ request()->is("clients/*") ? "c-active" : "" }}" href="{{ route('clients.index') }}">
            <i class="c-sidebar-nav-icon fas fa-fw fa-tachometer-alt"></i>
            Clients
        </a>
    </li>
    <li class="c-sidebar-nav-item">
        <a class="c-sidebar-nav-link {{ request()->is("projects/*") ? "c-active" : "" }}" href="{{ route('projects.index') }}">
            <i class="c-sidebar-nav-icon fas fa-fw fa-tachometer-alt"></i>
            Projects
        </a>
    </li>
    <li class="c-sidebar-nav-item">
        <a class="c-sidebar-nav-link {{ request()->is("tasks/*") ? "c-active" : "" }}" href="{{ route('tasks.index') }}">
            <i class="c-sidebar-nav-icon fas fa-fw fa-tachometer-alt"></i>
            Tasks
        </a>
    </li>
    {{--        <li class="c-sidebar-nav-title">Theme</li>--}}
    {{--        <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="colors.html">--}}
    {{--                <svg class="c-sidebar-nav-icon">--}}
    {{--                    <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-drop"></use>--}}
    {{--                </svg>--}}
    {{--                Colors</a></li>--}}
    {{--        <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="typography.html">--}}
    {{--                <svg class="c-sidebar-nav-icon">--}}
    {{--                    <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-pencil"></use>--}}
    {{--                </svg>--}}
    {{--                Typography</a></li>--}}
    <li class="c-sidebar-nav-divider"></li>
    <li class="c-sidebar-nav-item mt-auto"></li>
    <li class="c-sidebar-nav-item"><a href="#" class="c-sidebar-nav-link"
                                      onclick="event.preventDefault(); document.getElementById('logoutform').submit();">
            <i class="c-sidebar-nav-icon fas fa-fw fa-sign-out-alt"></i>
            Logout</a>
    </li>
</ul>
