<section class="banner-section">
    <div class="banner-carousel owl-carousel owl-theme">
        <?php foreach ($slider as $slide) {?>
        <div class="slide-item" style="background-image: url(<?= base_url($slide->image)?>);">
            <div class="auto-container">
            </div>
        </div>
         <?php } ?>
    </div>
</section>


<!-- <section>
    <div class="hero-slider-2 position-relative">
        <?php foreach ($slider as $slide) {?>
        <div class="hero-slider-item py-160" style="background-image: url(<?= base_url($slide->image)?>); height: 100vh">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="hero-content">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php } ?>
    </div>
</section>
 -->