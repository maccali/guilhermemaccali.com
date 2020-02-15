<div id="sobre" class="container-fluid primary padding-botton-extra">
    <div class="container padding-container ">
        <div class="row">
            <div class="col-12 titulo-sessao">
                <h2>Sobre</h2>
            </div>
        </div>
        <div class="row margin-bottom-60">
            <div class="col-12 col-md-4">
            <div class="cont-eu-img">
                <?php $foto = get_field("foto", 12); ?>
                <img class="eu-img" src="<?php echo $foto['url']?>" alt="<?php echo $foto['alt']?>"></div>
            </div>
            <div class="col-12 col-md-8">
                <div class="sobre-texto">
                    <p class="intro"><b>Seja Bem-Vindo!</b>Meu nome é,</p>
                    <h3 class="nome">Guilherme Maccali</h3>
                    <div class="resto-texto first-letter">
                        <?php echo get_field("sobre", 12)?>
                    </div>
                </div>
                <a href="#contato" class="btn btn-primary to-croll" >Entre em contato</a>
            </div>
        </div>
    </div>
</div> 
