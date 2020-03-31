<?php 
// $search_text = the_excerpt();
$search_text = get_the_excerpt();

// Strip the <p> tag by replacing it empty string
$tags = array("<p>", "</p>");
$search_content = str_replace($tags, "", $search_text);

$imagem = get_field('imagem', get_the_ID());
$tecnologias = acf_photo_gallery('tecnologias', get_the_ID());

?>
<a href="<?php the_permalink(); ?>" class="card-projeto shadow-sm">
    <div class="img">
        <img src="<?php echo $imagem['url'] ?>" alt />
    </div>
    <div class="text-cont">
        <div class="nome">
            <p><?php the_title()?></p>
        </div>
        <div class="descricao">
            <p><?php echo $search_content;?></p>
        </div>
        <div class="techs">
            <?php foreach($tecnologias as $key => $tecnologia):?>
            <img 
                src="<?php echo $tecnologia['thumbnail_image_url']?>" 
                alt="<?php echo $tecnologia['title']?>">
            <?php endforeach;?>
        </div>
    </div>
</a>
