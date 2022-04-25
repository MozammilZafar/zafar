<div class="body-content">
    <div class="header-section">
        <div class="logo">
            <a href="<?= base_url('Webadmin') ?>">
            <span class="logo-img">
                <img src="<?= base_url($basic_details->logo) ?>" alt="<?= ($basic_details->site_name) ?>" height="26">
            </span>
            </a>
        </div>
        <a class="toggle-btn"><i class="ti ti-menu"></i></a>
        <div class="notification-wrap">
            <div class="right-notification">
                <ul class="notification-menu">
                    <li>
                        <a href="javascript:;" data-toggle="dropdown">
                            <img src="<?= base_url($basic_details->logo) ?>" alt="<?= ($basic_details->site_name) ?>" >
                        </a>
                        <div class="dropdown-menu dropdown-menu-right profile-menu">
                            <a class="dropdown-item" href="<?= base_url('Webadmin/logout') ?>">
                                <i class="mdi mdi-logout m-r-5 text-muted"></i> Logout
                            </a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>