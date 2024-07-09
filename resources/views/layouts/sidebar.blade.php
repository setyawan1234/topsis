<aside class="left-sidebar shadow-sm">
    <div>
        <div class="brand-logo d-flex align-items-center justify-content-between">
            <img src="{{ asset('images/logos/logo-brawijaya.jpg') }}" width="180" type="image/svg"
                style="cursor: pointer; margin-top: 20px; border-radius: 8px" />
            <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
                <i class="ti ti-x fs-8"></i>
            </div>
        </div>

        <nav class="sidebar-nav scroll-sidebar"data-simplebar="">
            <ul id="sidebarnav">
                <li class="nav-small-cap">
                    <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                    <span class="hide-menu" style="margin-left: -8px">Home</span>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link" href="{{route('home')}}" aria-expanded="false">
                        <span>
                            <i class="bi bi-columns-gap" style="font-size: 16px"></i>
                        </span>
                        <span class="hide-menu">Dashboard</span>
                    </a>
                </li>
                <li class="nav-small-cap">
                    <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                    <span class="hide-menu" style="margin-left: -8px">Menu</span>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link" href="{{ route('kriteria') }}" aria-expanded="false">
                        <span>
                            <i class="bi bi-journal-plus" style="font-size: 20px"></i>
                        </span>
                        <span class="hide-menu">Kriteria</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link" href="{{ route('subkriteria') }}" aria-expanded="false">
                        <span>
                            <i class="bi bi-journal-text" style="font-size: 20px"></i>
                        </span>
                        <span class="hide-menu">Keterangan Kriteria</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link" href="{{ route('alternatif') }}" aria-expanded="false">
                        <span>
                            <i class="bi bi-map" style="font-size: 18px"></i>
                        </span>
                        <span class="hide-menu">Alternatif</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link" href="{{route('nilaialternatif')}}" aria-expanded="false">
                        <span>
                            <i class="bi bi-file-earmark-bar-graph" style="font-size: 20px"></i>
                        </span>
                        <span class="hide-menu">Nilai Alternatif</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link" href="{{route('normalisasi_nilai')}}" aria-expanded="false">
                        <span>
                            <i class="bi bi-calculator" style="font-size: 20px"></i>
                        </span>
                        <span class="hide-menu">Normalisasi</span>
                    </a>
                </li>
        </nav>
    </div>
</aside>
