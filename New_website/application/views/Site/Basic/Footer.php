 <footer class="main-footer">
        <div class="widgets-section" style="background-image: url(images/background/4.jpg);">
            <div class="auto-container">
                <div class="row">
                    <div class="footer-column col-lg-4 col-md-4 col-sm-12">
                                <!--Footer Column-->
                                <div class="footer-widget recent-posts">
                                    <div class="widget-content">
                                        <div class="post">
                                            <div class="text">
                                                <i class="fa fa-phone" aria-hidden="true"></i>
                                                <a href="Tel:<?= $basic_detail->contact; ?>">
                                                <?= $basic_detail->contact; ?></a>
                                            </div>
                                        </div>
                                        <div class="post">
                                            <div class="text">
                                                <i class="fa fa-envelope-o" aria-hidden="true"></i>
                                                 <a href="#"><?= $basic_detail->email ; ?></a>
                                            </div>
                                        </div>

                                        <div class="post">
                                            <div class="text">
                                               <i class="fa fa-home" aria-hidden="true"></i>
                                                <a href="#"><?= $basic_detail->address; ?></a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    <div class="big-column col-xl-8 col-lg-12 col-md-12 col-sm-12">
                         <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3685.4444961563013!2d88.35584111413044!3d22.5250160852073!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a0277292a96c9f7%3A0xe97eee5cd08ca30e!2sRichFeel+Trichology+Center!5e0!3m2!1sen!2sin!4v1562679529196!5m2!1sen!2sin" width="100%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="auto-container">
                <div class="inner-container clearfix">
                    <div class="copyright-text">
                        <p>&copy;  2019 <a href="index-2.html">Anakara Consulting Theme</a> | All rights reserved.</p>
                    </div>  
                </div>
            </div>
        </div>
    </footer>
</div>  
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-angle-double-up"></span></div>
<script src="<?= base_url()?>assets/Site/js/jquery.js"></script>
<script src="<?= base_url()?>assets/Site/js/jquery.js"></script>
<script>
    $(".link-chain").click(function() {

        $('html, body').animate({

            scrollTop: $($(this).attr('href')).offset().top

        }, 2000);

    });

</script>
<script src="<?= base_url()?>assets/Site/js/popper.min.js"></script>
<script src="<?= base_url()?>assets/Site/js/jquery-ui.js"></script>
<script src="<?= base_url()?>assets/Site/js/bootstrap.min.js"></script>
<script src="<?= base_url()?>assets/Site/js/jquery.fancybox.js"></script>
<script src="<?= base_url()?>assets/Site/js/owl.js"></script>
<script src="<?= base_url()?>assets/Site/js/wow.js"></script>
<script src="<?= base_url()?>assets/Site/js/appear.js"></script>
<script src="<?= base_url()?>assets/Site/js/script.js"></script>
</body>
</html>