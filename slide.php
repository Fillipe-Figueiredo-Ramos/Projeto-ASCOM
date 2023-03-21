<?php

global $posts;
$n=0;
$args = array( 
    'post_type' => 'banner',
    'posts_per_page' => 8
);
$loop = new WP_Query($args);
if($loop->have_posts()):
?>

<div class="banner-slide">
    <div id="myCarousel2" class="carrousel slide" data-ride="carousel">

<!-- circulo indicador abaixo do slide -->
    <ol class="carousel-indicators">
        <?php while($loop->have_posts()): $loop->the_post(); ?>
        <li data-target="#myCarousel2" data-slide-to="<?php echo $n++; ?>"></li>
        <?php endwhile; ?>
    </ol>

<div class="carousel-inner">
<?php $b = 0; while ( $loop->have_posts() ) : $loop->the_post(); ?>
<div class="carousel-item item <?php if (0 == $b) { echo "active"; } ?> ">

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
        <div class="item active">
        <?php if(has_post_thumbnail()) { the_post_thumbnail();} ?> <!--imagem do slide--->
        <div class="carousel-caption">
            <h3><?php the_title(); ?> </h3><!--titulo do banner-->
            <?php the_content(); ?><!--conteudo do banner-->
        </div>
    </div>

</div>
<?php $b++ ?>
<?php endwhile ?>
</div>

<!-- apresenta as setas direcionais -->
    <a class="left carousel-control" href="#myCarousel2" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    </a>

    <a class="right carousel-control" href="#myCarousel2" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    </a>

</div><!-- /.csrousel -->

</div>

<?php endif; wp_reset_query(); ?>