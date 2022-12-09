<div class="header-area header-bottom">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-9  d-none d-lg-block">
                <div class="horizontal-menu">
                    <nav>
                        <ul id="nav_menu">
                            <li class="{{ (request()->is('admin/dashboard')) ? 'active' : '' }}">
                                <a href="/admin/dashboard"><i class="ti-dashboard"></i><span>Dashboard</span></a>
                            </li>
                            <li class="{{ (request()->is('admin/laporan')) ? 'active' : '' }}">
                                <a href="/admin/laporan"><i class="ti-file"></i><span>Laporan</span></a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
            <!-- nav and search button -->
            <!-- <div class="col-lg-3 clearfix">
                <div class="search-box">
                    <form action="#">
                        <input type="text" name="search" placeholder="Search..." required>
                        <i class="ti-search"></i>
                    </form>
                </div>
            </div> -->
            <!-- mobile_menu -->
            <div class="col-12 d-block d-lg-none">
                <div id="mobile_menu"></div>
            </div>
        </div>
    </div>
</div>