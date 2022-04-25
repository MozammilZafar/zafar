<body class="sticky-header">
    <section>
        <div class="sidebar-left">
            <div class="sidebar-left-info">
                <ul class="side-navigation">
                    <li <?= $p1 ?>>
                        <a href="<?= base_url('Webadmin') ?>">
                            <i class="mdi mdi-gauge"></i> 
                            <span>Dashboard</span>
                        </a>
                    </li>
                    <li <?= $p2 ?>>
                        <a href="<?= base_url('Admin/Basic_Details') ?>"><i class="mdi mdi-gauge"></i> <span>Basic Detail</span></a>
                    </li>  
                    <!-- <li <?= $p22?>>
                        <a href="<?= base_url('Admin/Basic_Details/csp_enquiry') ?>">
                            <i class="mdi mdi-gauge"></i>
                            <span>CSP Enquiry</span>
                        </a>
                    </li> -->
                    <li <?= $p21?>>
                        <a href="<?= base_url('Admin/Basic_Details/personal') ?>">
                            <i class="mdi mdi-gauge"></i>
                            <span> Enquiries</span>
                        </a>
                    </li>
                    <li class="menu-list">
                        <a href="#">
                            <i class="mdi mdi-book-multiple-variant"></i> 
                            <span>Slider</span>
                        </a>
                        <ul class="child-list">
                            <li <?= $p11 ?>>
                                <a href="<?= base_url('Admin/Slider/add_slider') ?>" data-i18n="nav.dash.project" class="menu-item">Add Slider</a>
                            </li>
                            <li <?= $p12 ?>>
                                <a href="<?= base_url('Admin/Slider') ?>" data-i18n="nav.dash.ecommerce" class="menu-item">Edit/Delete Slider</a>
                            </li>
                        </ul>
                    </li>
                    <li <?= $p16?>>
                        <a href="<?= base_url('Admin/Services') ?>">
                            <i class="mdi mdi-gauge"></i>
                            <span>Services</span>
                        </a>
                    </li>
                    <li <?= $p13?>>
                        <a href="<?= base_url('Admin/About') ?>">
                            <i class="mdi mdi-gauge"></i>
                            <span>About Us</span>
                        </a>
                    </li> 
                    <li <?= $p20?>>
                        <a href="<?= base_url('Admin/Counter') ?>">
                            <i class="mdi mdi-gauge"></i>
                            <span>Counter</span>
                        </a>
                    </li>  
                    <li <?= $p17?>>
                        <a href="<?= base_url('Admin/Document') ?>">
                            <i class="mdi mdi-gauge"></i>
                            <span>Document</span>
                        </a>
                    </li> 
                   
                    
                </ul>
            </div>
        </div>
    </section>
</body>