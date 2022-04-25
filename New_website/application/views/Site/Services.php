<section class="features-section">
        <div class="auto-container" id="Services">
            <div class="sec-title text-center wow fadeInUp">
                <h2>What We Do</h2>
            </div>

            <div class="row">
                 <?php foreach ($services as $service) {?>
                <div class="feature-block col-lg-4 col-md-6 col-sm-12 wow fadeInLeft">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><a href="services.html"><img src="<?= base_url($service->image)?>" alt=""></a></figure><!-- 
                            <div class="icon-box"><span class="icon flaticon-light-bulb"></span></div> -->
                        </div>
                        <div class="caption-box">
                            <h3><a href="service-single.html"><?= ($service->title)?></a></h3>
                            <div class="text"><?= ($service->content )?> </div>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </section>

<!-- <section class="section">
    <div class="container" id="Services">
        <div class="row justify-content-center">
            <div class="col-lg-12 text-center">
                <h2 class="section-title section-title-border">Our Service</h2>
            </div>
             <?php foreach ($services as $service) {?>
            <div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">
                <div class="card text-center p-3">
                    <img class="card-img-top rounded" src="<?= base_url($service->image)?>" alt="team member image">
                    <div class="card-body pb-0">
                        <a href="team-single.html" class="card-title h4 font-primary text-dark">Amanda Richards</a>
                        <h6 class="text-color"><?= ($service->title)?></h6>
                        <p class="card-text border-bottom pb-3"><?= ($service->content )?></p>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</section>
 -->