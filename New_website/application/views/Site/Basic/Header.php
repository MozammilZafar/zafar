
<div class="page-wrapper">
    <div class="preloader"></div>
    <span class="header-span"></span>

    <header class="main-header">
        <div class="header-top">
            <div class="auto-container">
                <div class="inner-container clearfix">
                    <div class="top-left">
                    </div>
                    <div class="top-right clearfix">
                        <ul class="info-box">
                            <li><i class="fa fa-phone"></i><?= $basic_detail->contact; ?></li>
                            <li><i class="fa fa-envelope"></i><a href="mailto:<?= $basic_detail->email ; ?>"><?= $basic_detail->email ; ?></a></li>
                            
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-upper">
            <div class="inner-container">
                <div class="auto-container clearfix">
                    <div class="logo-outer">
                        <div class="logo"><a href="<?= base_url(); ?>"><img src="<?= base_url($basic_detail->logo); ?>" alt="" title=""></a></div>
                    </div>

                    <div class="nav-outer clearfix">
                        <nav class="main-menu navbar-expand-md navbar-light">
                            <div class="navbar-header">
                                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="icon fa fa-bars"></span>
                                </button>
                            </div>                            
                            <div class="collapse navbar-collapse clearfix" id="navbarSupportedContent">
                                <ul class="navigation clearfix">
                                    <li class="nav-item"><a href="<?= base_url()?>">Home</a></li>
                                    <li class="nav-item"><a class="nav-link link-chain" href="#About">About</a></li>
                                    <li class="nav-item"><a class="nav-link link-chain" href="#Services">Services</a></li>
                                    <li class="nav-item"><a class="nav-link link-chain" href="#Document">Document Required</a></li>
                                    <li class="nav-item"><a class="nav-link link-chain" href="#Apply_Form">Contact</a></li>
                                    <li class="nav-item" ><a  class="nav-link "  style="color: black" href="<?=  base_url(); ?>Web/Check_Status" >Check Status</a></li>
                                </ul>
                            </div>
                        </nav>
                        <div class="outer-box clearfix">
                            <div class="search-box-outer">
                                <div class="dropdown">
                                    <button class="search-box-btn dropdown-toggle" type="button" id="dropdownMenu3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="fa fa-search"></span></button>
                                    <ul class="dropdown-menu pull-right search-panel" aria-labelledby="dropdownMenu3">
                                        <li class="panel-outer">
                                            <div class="form-container">
                                                <form method="post" action="http://t.commonsupport.com/ankara/blog.html">
                                                    <div class="form-group">
                                                        <input type="search" name="field-name" value="" placeholder="Search Here" required>
                                                        <button type="submit" class="search-btn"><span class="fa fa-search"></span></button>
                                                    </div>
                                                </form>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>