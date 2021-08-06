<ul class="c-header-nav ml-auto mr-4">
    <li class="c-header-nav-item dropdown">
        <a class="c-header-nav-link" data-toggle="dropdown" href="#"
                                              role="button" aria-haspopup="true" aria-expanded="false">
            <div class="c-avatar"><img class="c-avatar-img" src="assets/img/avatars/6.jpg" alt="{{ auth()->user()->first_name }}">
            </div>
        </a>
        <div class="dropdown-menu dropdown-menu-right pt-0">
            <div class="dropdown-header bg-light py-2"><strong>Account</strong></div>
            <a class="dropdown-item" href="#">
                <svg class="c-icon mr-2">
                    <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-bell"></use>
                </svg>
                Updates<span class="badge badge-info ml-auto">42</span></a><a class="dropdown-item" href="#">
                <svg class="c-icon mr-2">
                    <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-envelope-open"></use>
                </svg>
                Messages<span class="badge badge-success ml-auto">42</span></a><a class="dropdown-item"
                                                                                  href="#">
                <svg class="c-icon mr-2">
                    <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-task"></use>
                </svg>
                Tasks<span class="badge badge-danger ml-auto">42</span></a><a class="dropdown-item" href="#">
                <svg class="c-icon mr-2">
                    <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-comment-square"></use>
                </svg>
                Comments<span class="badge badge-warning ml-auto">42</span></a>
            <div class="dropdown-header bg-light py-2"><strong>Settings</strong></div>
            <a class="dropdown-item" href="#">
                <svg class="c-icon mr-2">
                    <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-user"></use>
                </svg>
                Profile</a><a class="dropdown-item" href="#">
                <svg class="c-icon mr-2">
                    <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-settings"></use>
                </svg>
                Settings</a><a class="dropdown-item" href="#">
                <svg class="c-icon mr-2">
                    <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-credit-card"></use>
                </svg>
                Payments<span class="badge badge-secondary ml-auto">42</span></a><a class="dropdown-item"
                                                                                    href="#">
                <svg class="c-icon mr-2">
                    <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-file"></use>
                </svg>
                Projects<span class="badge badge-primary ml-auto">42</span></a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">
                <svg class="c-icon mr-2">
                    <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-lock-locked"></use>
                </svg>
                Lock Account</a>
            <a class="dropdown-item" href="#" onclick="event.preventDefault(); document.getElementById('logoutform').submit();">
                <i class="c-icon fas fa-fw fa-sign-out-alt mr-2"></i>
                Logout</a>
        </div>
    </li>
</ul>
