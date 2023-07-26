<nav class="pcoded-navbar menu-light ">
    <div class="navbar-wrapper  ">
        <div class="navbar-content scroll-div " >
            
            <div class="">
                <div class="main-menu-header">
                    <img class="img-radius" src="{{asset('template/dist/assets/images/user/avatar-2.jpg')}}" alt="User-Profile-Image">
                    <div class="user-details">
                        <div id="more-details">UX Designer <i class="fa fa-caret-down"></i></div>
                    </div>
                </div>
                <div class="collapse" id="nav-user-link">
                    <ul class="list-unstyled">
                        <li class="list-group-item"><a href="user-profile.html"><i class="feather icon-user m-r-5"></i>View Profile</a></li>
                        <li class="list-group-item"><a href="#!"><i class="feather icon-settings m-r-5"></i>Settings</a></li>
                        <li class="list-group-item"><a href="auth-normal-sign-in.html"><i class="feather icon-log-out m-r-5"></i>Logout</a></li>
                    </ul>
                </div>
            </div>
            
            <ul class="nav pcoded-inner-navbar ">
                <li class="nav-item pcoded-menu-caption">
                    <label>Navigation</label>
                </li>
                <li class="sidebar-item {{ Route::is('dashboard') ? 'selected' : '' }}"> <a
                    class="sidebar-link sidebar-link" href="{{route('dashboard')}}" aria-expanded="false"><i 
                    class="feather icon-home"></i><span class="hide-menu">Dashboard</span></a>
                </li>
                <li class="nav-item pcoded-menu-caption">
                    <label>Tabel</label>
                </li>
                <li class="sidebar-item {{ Route::is('pages.akun') ? 'selected' : '' }}"> <a
                    class="sidebar-link sidebar-link" href="{{route('pages.akun')}}" aria-expanded="false"><i 
                    class="feather icon-file-text"></i><span class="hide-menu">Akun</span></a>
                </li>
                <li class="sidebar-item {{ Route::is('pages.departement') ? 'selected' : '' }}"> <a
                    class="sidebar-link sidebar-link" href="{{route('pages.departement')}}" aria-expanded="false"><i
                    class="feather icon-grid"></i><span class="hide-menu">Departement</span></a>
                </li>
                <li class="sidebar-item {{ Route::is('pages.jabatan') ? 'selected' : '' }}"> <a
                    class="sidebar-link sidebar-link" href="{{route('pages.jabatan')}}" aria-expanded="false"><i
                    class="feather icon-users"></i><span class="hide-menu">Jabatan</span></a>
                </li>
                <li class="sidebar-item {{ Route::is('pages.koordinat') ? 'selected' : '' }}"> <a
                    class="sidebar-link sidebar-link" href="{{route('pages.koordinat')}}" aria-expanded="false"><i
                    class="feather icon-map"></i><span class="hide-menu">Koordinat</span></a>
                </li>
                <li class="sidebar-item {{ Route::is('pages.setup') ? 'selected' : '' }}"> <a
                    class="sidebar-link sidebar-link" href="{{route('pages.setup')}}" aria-expanded="false"><i
                    class="feather icon-settings"></i><span class="hide-menu">Set Up</span></a>
                </li>
                <li class="sidebar-item {{ Route::is('pages.gate') ? 'selected' : '' }}"> <a
                    class="sidebar-link sidebar-link" href="{{route('pages.gate')}}" aria-expanded="false"><i
                    class="feather icon-server"></i><span class="hide-menu">Gate</span></a>
                </li>
                <li class="sidebar-item {{ Route::is('pages.user') ? 'selected' : '' }}"> <a
                    class="sidebar-link sidebar-link" href="{{route('pages.user')}}" aria-expanded="false"><i
                    class="feather icon-user"></i><span class="hide-menu">User</span></a>
                </li>
                <li class="sidebar-item {{ Route::is('pages.log') ? 'selected' : '' }}"> <a
                    class="sidebar-link sidebar-link" href="{{route('pages.log')}}" aria-expanded="false"><i
                    class="feather icon-map"></i><span class="hide-menu">Log</span></a>
                </li>
                <li class="sidebar-item {{ Route::is('pages.kehadiran') ? 'selected' : '' }}"> <a
                    class="sidebar-link sidebar-link" href="{{route('pages.kehadiran')}}" aria-expanded="false"><i
                    class="feather icon-book"></i><span class="hide-menu">Kehadiran</span></a>
                </li>
            </ul>
        </div>
    </div>
</nav>