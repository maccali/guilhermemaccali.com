<div id="interesses" class="container-fluid claro">
    <div class="container padding-container padding-botton-zero" data-aos="fade-up">
        <div class="row">
            <div class="col-12 titulo-sessao">
                <h2>Interesses</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <?php $galeria = acf_photo_gallery("interesses", get_the_ID())?>
                <?php $cont = count($galeria, COUNT_NORMAL)?>
                <div id="interests" class="skils plus owl-carousel">
                    <?php for ($i = 0; $i < $cont; $i++): ?>
                        <?php $thumbnail_image_url = $galeria[$i]['thumbnail_image_url']?>
                        <?php $title = $galeria[$i]['title']?>
                        <?php $caption = $galeria[$i]['caption']?>
                        <div><img src="<?php echo $thumbnail_image_url ?>" alt="<?php echo $caption ?>"><p><?php echo $title ?></p></div>
                    <?php endfor;?>
                </div>  
            </div>
        </div>
        
    </div>
</div> 
