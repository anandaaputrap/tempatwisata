<div class="sidebar-user text-center">
    <a class="setting-primary" href="javascript:void(0)"><i data-feather="settings"></i></a><img
        class="img-90 rounded-circle" src="{{ asset('assets') }}/images/dashboard/1.png" alt="" />
    <div class="badge-bottom"><span class="badge badge-primary">New</span></div>
    <a href="user-profile.html">
        <h6 class="mt-3 f-14 f-w-600">{{ Auth::user()->nama }}</h6>
    </a>
    <p class="mb-0 font-roboto">{{ Auth::user()->getRoleNames()[0] }}</p>
    <ul>
        <li>
            <span><span class="counter">19.8</span>k</span>
            <p>Follow</p>
        </li>
        <li>
            <span>2 year</span>
            <p>Experince</p>
        </li>
        <li>
            <span><span class="counter">95.2</span>k</span>
            <p>Follower</p>
        </li>
    </ul>
</div>
<nav>
    <div class="main-navbar">
        <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
        <div id="mainnav">
            <ul class="nav-menu custom-scrollbar">
                <li class="back-btn">
                    <div class="mobile-back text-end"><span>Back</span><i
                            class="fa fa-angle-right ps-2" aria-hidden="true"></i></div>
                </li>
                <li class="sidebar-main-title">
                    <div>
                        <h6>Master</h6>
                    </div>
                </li>
                <li class="dropdown">
                    <a class="nav-link menu-title " href="javascript:void(0)"><i
                            data-feather="airplay"></i><span>Wisata</span></a>
                    <ul class="nav-submenu menu-content" style="display: none;">
                        <li><a href="{{ route('wisata.index') }}" class="">List Data</a></li>
                        <li><a href="{{ route('wisata.create') }}" class="">Tambah Data</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a class="nav-link menu-title " href="javascript:void(0)"><i
                            data-feather="database"></i><span>Kriteria</span></a>
                    <ul class="nav-submenu menu-content" style="display: none;">
                        <li><a href="{{ route('kriteria-fasilitas.index') }}" class="">Kriteria Fasilitas</a></li>
                        <li><a href="{{ route('kriteria-harga-tiket.index') }}" class="">Kriteria Harga Tiket</a></li>
                        <li><a href="{{ route('kriteria-jarak.index') }}" class="">Kriteria Jarak</a></li>
                        <li><a href="{{ route('kriteria-pelayanan.index') }}" class="">Kriteria Pelayanan</a></li>
                        <li><a href="{{ route('kriteria-suasana.index') }}" class="">Kriteria Suasana</a></li>
                    </ul>
                </li>
                <li class="sidebar-main-title">
                    <div>
                        <h6>Report</h6>
                    </div>
                </li>
                <li class="dropdown">
                    <a class="nav-link menu-title link-nav " href="task.html"><i data-feather="check-square"></i><span>Hasil Survei</span></a>
                    <a class="nav-link menu-title link-nav " href="task.html"><i data-feather="user"></i><span>Pengguna</span></a>
                    <a class="nav-link menu-title link-nav " href="task.html"><i data-feather="list"></i><span>Kritik & Saran</span></a>
                </li>
            </ul>
        </div>
        <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
    </div>
</nav>