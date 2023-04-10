<?php /* Template Name: arquivo avisos */ ?>
<?php require_once 'header.php'; ?>

<div class="view2 intro hm-purple-light" id="starter" style="z-index: 2;">

    <?php
    the_custom_logo();

    $args = array(
        'post_type' => 'banners',
        'post_status' => 'publish',
        'posts_per_page' => 1,
        'category_name' => 'avisos'
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
<section class="secao-Item-Aviso">
    <?php 
    $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
    $args = array(
        'post_type' => 'aviso',
        'post_status' => 'publish',
        'posts_per_page' => 6,
        'paged' => $paged
    );

    $my_posts = new WP_Query($args);
    if ($my_posts->have_posts()): 
    while ($my_posts->have_posts()): $my_posts->the_post(); ?>
        <div class="item-Aviso">
            <ul>
                <li class="imagem-Item-Aviso">
                    <?php the_post_thumbnail(); ?>
                </li>
                <li class="titulo-Item-Aviso">
                    <a href="<?php the_permalink(); ?>">
                        <?php the_title(); ?>
                    </a>
                </li>
            </ul>
        </div>
    <?php endwhile; ?>
    <div class="paginacao">
        <?php echo paginate_links(array(
            'total' => $my_posts->max_num_pages,
            'prev_text' => '<',
            'next_text' => '>',
            'type' => 'list',
            'current' => max(1, get_query_var('paged')),
        )); ?>
    </div>
    <?php wp_reset_postdata();
    endif; ?>
</section>

<?php get_footer(); ?>