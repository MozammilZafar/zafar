     <section class="chart-section">
    <div class="auto-container" id="About">
        <div class="row">
            <div class="content-column col-lg-6 col-md-12 col-sm-12">
                <div class="inner-column">
                    <div class="sec-title wow fadeInLeft" data-wow-delay="0ms">
                        <h2>About Us</h2>
                    </div>
                    <div class="text wow fadeInLeft" data-wow-delay="300ms"><?= $about->content ?></div>
                </div>
            </div>
            <div class="graph-column col-lg-6 col-md-12 col-sm-12 wow fadeIn">
                <div class="inner-column wow fadeInRight" data-wow-delay="900ms">
                    <figure class="graph-image"><img src="<?= base_url($about->image) ?>" alt=""></figure>
                </div>
            </div>
        </div>
    </div>
</section>