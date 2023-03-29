<?php /*Template Name: arquivo avisos */?>

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
<img id="wave" src="<?php echo get_stylesheet_directory_uri() . '/assets/img/wave-ai.svg' ?>" alt="">

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
        'post_type' => 'aviso',
        'post_status' => 'publish',
        'posts_per_page' => 'number of posts'
    ];

    $my_posts = get_posts($args);
    foreach ($my_posts as $post) { ?>
        <div class="CardAviso">
            <!--Imagem aviso-->
            <ul>
                <li>
                    <div class="Thumbnail-Aviso">
                        <?php the_post_thumbnail(); ?>
                    </div>
                </li>
                <!--Título do aviso-->
                <li>
                    <p class="TittleAviso">
                        <?php echo $post->post_title; ?>
                    </p>
                </li>

            </ul>
        </div>
    <?php } ?>
    <a href="#" class="vejaTodos">Veja todos >>></a>
</section>


<?php
require_once 'footer.php';
?>
