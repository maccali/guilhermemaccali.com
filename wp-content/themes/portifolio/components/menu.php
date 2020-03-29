<div class="container-fluid menu fixed">
    <div class="container">
        <nav class="navbar navbar-expand-lg ">
            <a class="navbar-brand"  data-aos="zoom-in" href="<?php echo get_site_url()?>">
                <img src="<?php echo get_template_directory_uri() . '/img/logo.png?v3' ?>" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav" data-aos="fade-left">

                    <?php $pageName  = get_the_title()?>
                    <?php 
                        $linkSobre = '#sobre';
                        $linkContato = '#contato';
                        $linkInteresses = '#interesses';
                        $linkCarreira = '#carreira';
                    
                        if($pageName != 'home'){
                            $linkSobre = get_home_url() . '/' . $linkSobre;
                            $linkContato = get_home_url() . '/' . $linkContato;
                            $linkInteresses = get_home_url() . '/' . $linkInteresses;
                            $linkCarreira = get_home_url() . '/' . $linkCarreira;
                        }
                    ?>

                    <li class="nav-item"><a class="nav-link to-croll" href="<?php echo $linkSobre?>">Sobre</a></li>
                    <li class="nav-item"><a class="nav-link to-croll" href="<?php echo $linkInteresses?>">Interesses</a></li>
                    <li class="nav-item"><a class="nav-link to-croll" href="<?php echo $linkCarreira?>">Carreira</a></li>
                    <li class="nav-item"><a class="nav-link to-croll" href="<?php echo $linkContato?>">Contato</a></li>
                </ul>
            </div>
        </nav>
    </div>
</div>



