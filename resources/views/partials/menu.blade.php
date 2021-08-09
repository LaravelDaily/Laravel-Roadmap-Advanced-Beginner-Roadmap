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
                <i class="c-sidebar-nav-icon fas fa-fw fa-user-alt"></i>
                Users
            </a>
        </li>
    @endcan
    <li class="c-sidebar-nav-item">
        <a class="c-sidebar-nav-link {{ request()->is("clients/*") ? "c-active" : "" }}" href="{{ route('clients.index') }}">
            <i class="c-sidebar-nav-icon fas fa-fw fa-address-card"></i>
            Clients
        </a>
    </li>
    <li class="c-sidebar-nav-item">
        <a class="c-sidebar-nav-link {{ request()->is("projects/*") ? "c-active" : "" }}" href="{{ route('projects.index') }}">
            <i class="c-sidebar-nav-icon fas fa-fw fa-copy"></i>
            Projects
        </a>
    </li>
    <li class="c-sidebar-nav-item">
        <a class="c-sidebar-nav-link {{ request()->is("tasks/*") ? "c-active" : "" }}" href="{{ route('tasks.index') }}">
            <i class="c-sidebar-nav-icon fas fa-fw fa-tasks"></i>
            Tasks
        </a>
    </li>
    <li class="c-sidebar-nav-divider"></li>
    <li class="c-sidebar-nav-item mt-auto"></li>
    <li class="c-sidebar-nav-item"><a href="#" class="c-sidebar-nav-link"
                                      onclick="event.preventDefault(); document.getElementById('logoutform').submit();">
            <i class="c-sidebar-nav-icon fas fa-fw fa-sign-out-alt"></i>
            Logout</a>
    </li>
</ul>
