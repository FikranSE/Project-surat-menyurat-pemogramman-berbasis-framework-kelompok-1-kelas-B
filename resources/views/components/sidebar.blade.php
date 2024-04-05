<aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-white"
    id="sidenav-main">
    <div class="sidenav-header">
        <i class="fas fa-times p-3 cursor-pointer text-dark opacity-5 position-absolute end-0 top-0 d-none d-xl-none"
            aria-hidden="true" id="iconSidenav"></i>
        <a class="navbar-brand m-0" href=" https://demos.creative-tim.com/material-dashboard/pages/dashboard "
            target="_blank">
            <img src="../assets/img/logo-ct-dark.png" class="navbar-brand-img h-100" alt="main_logo">
            <span class="ms-1 font-weight-bold text-dark">K1 PBF</span>
        </a>
    </div>
    <hr class="horizontal light mt-0 mb-2">
    <div class="collapse navbar-collapse w-auto" id="sidenav-collapse-main">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link {{ Request::is('/') ? 'text-white bg-blue' : 'text-dark' }}"
                    href="{{ url('/') }}">
                    <div class="text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">dashboard</i>
                    </div>
                    <span class="nav-link-text ms-1">Dashboard</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('suratmasuk*') ? 'text-white bg-blue' : 'text-dark' }}"
                    href="{{ url('/suratmasuk') }}">
                    <div class="text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">inbox</i>
                    </div>
                    <span class="nav-link-text ms-1">Surat Masuk</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('suratkeluar*') ? 'text-white bg-blue' : 'text-dark' }}"
                    href="{{ url('/suratkeluar') }}">
                    <div class="text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">receipt_long</i>
                    </div>
                    <span class="nav-link-text ms-1">Surat Keluar</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('agenda*') ? 'text-white bg-blue' : 'text-dark' }}"
                    href="{{ url('/agenda') }}">
                    <div class="text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">event</i>
                    </div>
                    <span class="nav-link-text ms-1">Agenda</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('notifications*') ? 'text-white bg-blue' : 'text-dark' }}"
                    href="{{ url('/notifications') }}">
                    <div class="text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">notifications</i>
                    </div>
                    <span class="nav-link-text ms-1">Notifications</span>
                </a>
            </li>
            <li class="nav-item mt-3">
                <h6 class="ps-4 ms-2 text-uppercase text-xs text-dark font-weight-bolder opacity-8">Account pages</h6>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('profile*') ? 'text-white bg-blue' : 'text-dark' }}"
                    href="{{ url('/profile') }}">
                    <div class="text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">person</i>
                    </div>
                    <span class="nav-link-text ms-1">Profile</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('sign-up*') ? 'text-white bg-blue' : 'text-dark' }}"
                    href="{{ url('/signin') }}">
                    <div class="text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">logout</i>
                    </div>
                    <span class="nav-link-text ms-1">Log out</span>
                </a>
            </li>
        </ul>
    </div>

</aside>
