<?php require_once 'header.php'; ?>     
            
<div class="container"></div>

    <div class="col-sm-8 offset-2"></div>
        <?php
        if ( have_posts() ) { ?>

            <?php
                while (have_posts()) {
                    the_post(); ?>


                        <div class="media">

                            <div class="media-left">
                                <img class="img-fluid" src="<?php the_post_thumbnail_url( 'thumbnail' ) ?>" class="media-object img-rounded" style="width:" title="<?php the_title_attribute(); ?>" alt="<?php the_title_attribute(); ?>">
                            </div>

                            <div class="media-body">
                                <h3 class="media-heading"><?php the_title(); ?></h3>
                                    <div>
                                        <span class="meta_data meta_pad"><i class="fa fa clock-o" aria-hidden="true"></i><?php the_time('m/d/y'); ?></span>
                                        <span class="meta_data"> <i class="fa fa user" aria-hidden="true"></i> <?php the_author(); ?></span>
                                    </div>

                                        <!--hidden for mobile-->
                                        <p class="hidden_mobile hidden-xs">
                                            <?php echo wp_trim_words( get_the_content(), $num_words = 12, $more = null)?>
                                        </p>
                                        <!--hidden for pc and tablet-->

                                        <div class="buttom_blog_style">
                                        <a class=" bnt_custom" href="<?php the_permalink(); ?>">Read more <i class="fa fa long-arrow-right" aria-hidden="true"></i> </a>
                                        </div>

                            </div>
                        </div>
                    
            <?php }
        ?>


    <?php }else{ ?>
        <h1>No result for this search query!</h1>
        <h1>No result for this search query!</h1>
        <h1>No result for this search query!</h1>
        <h1>No result for this search query!</h1>
        <h1>No result for this search query!</h1>
        <h4>resultados para:<?php the_title(); ?></h4>
        <?php }
        ?>
        


<?php require_once 'footer.php'; ?>