<?php /*Template Name: arquivo noticias */?>

<?php
require_once 'header.php';
?>
<div class="view2 intro hm-purple-light" id="starter" style="z-index: 2;">

    <?php
    the_custom_logo();

    $args = array(
        'post_type' => 'banners',
        'post_status' => 'publish',
        'posts_per_page' => 1,
        'category_name' => 'principal'
    );

    $query = new WP_Query($args);
    if ($query->have_posts()):
        while ($query->have_posts()):
            $query->the_post();
    ?>
    <div class="imagem-banner">
        <?php the_post_thumbnail(); ?>
    </div>
    <?php
        endwhile;
    endif;

    ?>

</div>
<div class="wave">
    <div class="custom-shape-divider-bottom-1679004214">
        <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
            <path
                d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z"
                class="shape-fill"></path>
        </svg>
    </div>
</div>

<!--body-->

<!--libras-->
<div vw class="enabled">
    <div vw-access-button class="active"></div>
    <div vw-plugin-wrapper>
        <div class="vw-plugin-top-wrapper"></div>
    </div>
</div>

<!-- começo da pagina -->
<?php $args = [
        'post_type' => 'noticias',
        'post_status' => 'publish',
        'posts_per_page' => '100000000000000000000000000'
    ];

    $my_posts = get_posts($args);
    foreach ($my_posts as $post) { ?>
        <div class="item-Noticia">
            <!--Imagem noticia-->
            <ul>
                <li>
                    <div class="imagem-Item-Noticia">
                        <?php the_post_thumbnail(); ?>
                    </div>
                </li>
                <!--Título da noticia-->
                <li>
                    <p class="titulo-Item-Noticia">
                        <?php echo $post->post_title; ?>
                    </p>
                </li>
                <!--Resumo da noticia-->
                <li>
                    <p class="resumo-Item-Noticia">
                        <?php echo $post->post_excerpt; ?>
                    </p>
                </li>

            </ul>
        </div>
    <?php } ?>




<?php
require_once 'footer.php';
?>
