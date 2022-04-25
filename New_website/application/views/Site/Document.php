<section class="section" style="margin-top: 50px;margin-bottom: 30px;">
    <div class="container" id="Document">
        <div class="row">            
            <div class="col-lg-6">                
                <img class="img-fluid" src="<?= base_url($document->image)?>" >                
            </div>
            <div class="col-lg-6">
                <div class="about-content">
                    <h5 class="section-title-sm">Document</h5>
                    <p class="text-dark"><?= $document->content ?></p>
                </div>
            </div>
        </div>
    </div>
</section>

