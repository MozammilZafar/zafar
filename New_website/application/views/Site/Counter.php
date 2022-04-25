<section class="fun-facts-and-clients" style="background-image: url(<?= base_url('assets/Site/images/background/5.jpg')?>);">
    <div class="auto-container">
        <div class="fact-counters">
            <div class="row">                
                <div class="counters-column col-lg-10 col-md-12 col-sm-12" style="margin-left: 71px;">
                    <div class="row">
                        <div class="counter-column col-lg-3 col-md-3 col-sm-12">
                            <div class="count-box">
                                <span class="icon flaticon-heart-7"></span>
                                <span class="count-text" data-speed="3000" data-stop="<?= $counter[0]->count ?>">0</span>
                                <h4 class="counter-title"><?= $counter[0]->title ?></h4>
                            </div>
                        </div>
                        <div class="counter-column col-lg-3 col-md-3 col-sm-12">
                            <div class="count-box">
                                <span class="icon flaticon-plate-1"></span>
                                <span class="count-text" data-speed="3000" data-stop="<?= $counter[1]->count ?>">0</span>
                                <h4 class="counter-title"><?= $counter[1]->title ?></h4>
                            </div>
                        </div>
                        <div class="counter-column col-lg-3 col-md-3 col-sm-12">
                            <div class="count-box">
                                <span class="icon flaticon-favourite-star"></span>
                                <span class="count-text" data-speed="3000" data-stop="<?= $counter[2]->count ?>">0</span>
                                <h4 class="counter-title"><?= $counter[2]->title ?></h4>
                            </div>
                        </div>
                        <div class="counter-column col-lg-3 col-md-3 col-sm-12">
                            <div class="count-box">
                                <span class="icon flaticon-favourite-star"></span>
                                <span class="count-text" data-speed="3000" data-stop="<?= $counter[3]->count ?>">0</span>
                                <h4 class="counter-title"><?= $counter[3]->title ?></h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
    @media only screen and (max-width: 320px) {
  .fact-counters  .counters-column{
    margin-left: 0px !important;
  }
}
</style>