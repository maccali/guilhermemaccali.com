<div class="container-fluid invi">
    <div class="container" data-aos="fade-up">
        <div class="row">
            <div class="col-12 titulo-sessao ">
                <h2>Habilidades</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <?php $galeria = acf_photo_gallery("habilidades", 12)?>
                <?php $cont = count($galeria, COUNT_NORMAL)?>
                <div class="skils owl-carousel">
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
