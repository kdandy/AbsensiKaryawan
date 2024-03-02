<div class="app-sidebar sidebar-shadow">
    <?php $request = \Config\Services::request(); ?>
    <div class="app-header__logo">
        <div class="logo-src"></div>
        <div class="header__pane ml-auto">
            <div>
                <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                    <span class="hamburger-box">
                        <span class="hamburger-inner"></span>
                    </span>
                </button>
            </div>
        </div>
    </div>
    <div class="app-header__mobile-menu">
        <div>
            <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                <span class="hamburger-box">
                    <span class="hamburger-inner"></span>
                </span>
            </button>
        </div>
    </div>
    <div class="app-header__menu">
        <span>
            <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                <span class="btn-icon-wrapper">
                    <i class="fa fa-ellipsis-v fa-w-6"></i>
                </span>
            </button>
        </span>
    </div>    <div class="scrollbar-sidebar">
        <div class="app-sidebar__inner">
            <ul class="vertical-nav-menu">
                <li class="app-sidebar__heading">Dashboards</li>
                <li>
                    <a href="/" <?php if($request->uri->getSegment(1) == ''){echo 'class="mm-active"';}?>>
                          <i class="metismenu-icon pe-7s-culture"></i>
                        Dashboard
                    </a>
                </li>
                <li class="app-sidebar__heading">Menus</li>
                <li>
                    <a href="tables-regular.html">
                        <i class="metismenu-icon pe-7s-keypad"></i>
                        Master Finger
                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                    </a>

                    <ul>
                        <li>
                            <a href="/selectfinger">
                                <i class="metismenu-icon"></i>
                                Select Finger
                            </a>
                        </li> 
                        <li>
                            <a href="/datafinger">
                                <i class="metismenu-icon"></i>
                                Data Finger
                            </a>
                        </li>
                    </ul>

                </li>
                <li>
                    <a href="/karyawan" <?php if($request->uri->getSegment(1) == 'karyawan' || $request->uri->getSegment(1) == 'tambahkaryawan' || $request->uri->getSegment(1) == 'detailkaryawan' || $request->uri->getSegment(1) == 'editkaryawan'){echo 'class="mm-active"';}?>>
                        <i class="metismenu-icon pe-7s-users"></i>
                        Data Karyawan
                    </a>
                </li>
                <li>
                    <a href="/divisi">
                        <i class="metismenu-icon pe-7s-id"></i>
                        Data Divisi
                    </a>
                </li>
                <li>
                    <a href="/roles">
                        <i class="metismenu-icon pe-7s-settings"></i>
                        Data Role
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>  