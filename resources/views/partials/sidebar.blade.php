<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="#" class="brand-link">
        <img src="{{ url('img/logo-bmti.png') }}" alt="Logo" class="brand-image img-circle elevation-3"
            style="opacity: .8">
        <span class="brand-text font-weight-light">SARPRAS BMTI</span>
    </a>
    <div class="sidebar">
        <!-- SidebarSearch Form -->
        <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search"
                    aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <li class="nav-item">
                    <a href="{{ route('dashboardadmin') }}" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p> Dashboard</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p> Kun-jin</p>
                    </a>
                </li>
                {{-- <li class="nav-item">
                    <a href="{{ route('buildings.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-landmark"></i>
                        <p>
                            Daftar Gedung
                        </p>
                    </a>
                </li> --}}
                <!-- Daftar Gedung -->
                <li
                    class="nav-item {{ request()->is('rbi*') || request()->is('pancaniti*') || request()->is('binangkit*') || request()->is('lapangbola*') || request()->is('kolamrenang*') || request()->is('wismawaskita*') || request()->is('wismakangguru*') || request()->is('wismapanglayungan*') ? 'menu-open' : '' }}">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-calendar-day"></i>
                        <p> Jadwal Booking Gedung</p>
                    </a>
                    <ul class="ml-2">
                        <li class="nav-item">
                            <a href="{{ route('showrbi.list') }}"
                                class="nav-link {{ request()->is('rbi') ? 'active' : '' }}">
                                <i class="nav-icon fas fa-landmark"></i>
                                <p>Gedung RBI</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('showpancaniti.list') }}"
                                class="nav-link {{ request()->is('pancaniti*') ? 'active' : '' }}">
                                <i class="nav-icon fas fa-landmark"></i>
                                <p>Gedung Pancaniti</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('showbinangkit.list') }}"
                                class="nav-link {{ request()->is('binangkit*') ? 'active' : '' }}">
                                <i class="nav-icon fas fa-landmark"></i>
                                <p>Gedung Binangkit</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('showlapangan.list') }}"
                                class="nav-link {{ request()->is('lapangbola*') ? 'active' : '' }}">
                                <i class="nav-icon fas fa-landmark"></i>
                                <p>Lapang Bola</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('showk.list') }}"
                                class="nav-link {{ request()->is('kolamrenang*') ? 'active' : '' }}">
                                <i class="nav-icon fas fa-landmark"></i>
                                <p>Kolam Renang</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('showwaskita.list') }}"
                                class="nav-link {{ request()->is('wismawaskita*') ? 'active' : '' }}">
                                <i class="nav-icon fas fa-landmark"></i>
                                <p>Wisma Waskita</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('showkangguru.list') }}"
                                class="nav-link {{ request()->is('wismakangguru*') ? 'active' : '' }}">
                                <i class="nav-icon fas fa-landmark"></i>
                                <p>Wisma Kangguru</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('showpanglayungan.list') }}"
                                class="nav-link {{ request()->is('wismapanglayungan*') ? 'active' : '' }}">
                                <i class="nav-icon fas fa-landmark"></i>
                                <p>Wisma Pangalayungan</p>
                            </a>
                        </li>
                    </ul>
                </li>

            </ul>
        </nav>
    </div>
</aside>
