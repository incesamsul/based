<div class="main-sidebar">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="#">SI PENGADUAN </a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="#">St</a>
        </div>
        <ul class="sidebar-menu">

            {{-- MENU PENGGUNA --}}
            {{-- SEMUA PENGGUNA / USER MEMPUNYAI MENU INI --}}
            <li class="menu-header">Pengguna</li>
            <li class="" id="liDashboard"><a class="nav-link" href="{{ URL::to('/dashboard') }}"><i
                        class="far fa-chart-bar"></i> <span>Dashboard</span></a></li>
            <li class="" id="liProfile"><a class="nav-link" href="{{ URL::to('/profile') }}"><i
                        class="far fa-user-circle "></i>
                    <span>Profile</span></a></li>
            <li class="" id="liBantuan"><a class="nav-link" href="{{ URL::to('/bantuan') }}"><i
                        class="far fa-question-circle"></i> <span>Bantuan</span></a></li>



            @if (auth()->user()->role_id == '1')
                {{-- MENU ADMIN --}}
                <li class="menu-header">Admin</li>

                <li class="" id="liRole"><a class="nav-link" href="{{ URL::to('/admin/role') }}"><i
                            class="far fa-user"></i>
                        <span>Role</span></a></li>

                <li class="" id="liMenu"><a class="nav-link" href="{{ URL::to('/admin/menu') }}"><i
                            class="far fa-list-alt"></i>
                        <span>Menu</span></a></li>


                <li class="" id="liManajemenPengguna"><a class="nav-link"
                        href="{{ URL::to('/admin/pengguna') }}"><i class="far fa-user"></i> <span>Pengguna</span></a>
                </li>
                <li class="" id="liRoleMenu"><a class="nav-link" href="{{ URL::to('/admin/role_menu') }}"><i
                            class="far fa-list-alt"></i>
                        <span>Role Menu</span></a></li>

                <li class="" id="liAplikasi"><a class="nav-link" href="{{ URL::to('/admin/aplikasi') }}"><i
                            class="far fa-object-group"></i>
                        <span>Aplikasi</span></a></li>

                <li class="" id="lilogaktivitas"><a class="nav-link"
                        href="{{ URL::to('/admin/log_aktivitas') }}"><i class="far fa-newspaper"></i>
                        <span>Log Aktivitas</span></a></li>

                <!-- <li class="" id="liAplikasiRole"><a class="nav-link" href="{{ URL::to('/admin/aplikasi_role') }}"><i class="far fa-list-alt"></i>
                    <span>Role Aplikasi </span></a></li> -->

                <!-- <li class="" id="liAplikasiMenu"><a class="nav-link" href="{{ URL::to('/admin/aplikasi_menu ') }}"><i
                        class="far fa-list-alt"></i>
                    <span>Menu Aplikasi </span></a></li> -->


                {{-- <li class="" id="liCms"><a class="nav-link" href="{{ URL::to('/admin/cms') }}"><i
                        class="far fa-window-restore"></i>
                    <span>CMS </span></a></li> --}}


                {{-- END OF MENU ADMIN --}}
            @endif



            <!-- DYNAMIC MENU HERE -->




        </ul>

        <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
            <a href="{{ URL::to('/logout') }}" class="btn bg-main text-white btn-lg btn-block btn-icon-split">
                <i class="fas fa-sign-out-alt"></i> Logout
            </a>
        </div>
    </aside>
</div>
