<?php require_once 'header.php'; ?>

<section id="Resultados">
    <?php
    if (have_posts()) { ?>
        <?php
        while (have_posts()) {
            the_post(); ?>

            <div class="ResultCard">
                <div class="media-body">
                    <div class="ImgResult">
                        <img class="img-fluid" src="<?php the_post_thumbnail_url('thumbnail') ?>"
                            class="media-object img-rounded" style="width:" title="<?php the_title_attribute(); ?>"
                            alt="<?php the_title_attribute(); ?>">
                    </div>

                    <ul>
                        <li>
                            <h3 class="ResultTittle">
                                <?php the_title(); ?>
                            </h3>
                        </li>
                        <li>
                            <div>
                                <span class="meta_data meta_pad"><i class="fa fa clock-o" aria-hidden="true"></i>
                                    <?php the_time('m/d/y'); ?>
                                </span>
                                <span class="meta_data"> <i class="fa fa user" aria-hidden="true"></i>
                                    <?php the_author(); ?>
                                </span>
                            </div>
                        </li>
                        <!--hidden for mobile-->
                        <li>
                            <p class="hidden_mobile hidden-xs">
                                <?php echo wp_trim_words(get_the_content(), $num_words = 12, $more = null) ?>
                            </p>
                        </li>
                        <!--hidden for pc and tablet-->
                        <li>
                            <div class="buttom_blog_style">
                                <a class=" bnt_custom" href="<?php the_permalink(); ?>">Read more <i
                                        class="fa fa long-arrow-right" aria-hidden="true"></i> </a>
                            </div>
                        </li>
                    </ul>
                </div>
                </ul>
            </div>
        <?php }
        ?>


    <?php } else { ?>
        <h1>No result for this search query!</h1>
        <h1>No result for this search query!</h1>
        <h1>No result for this search query!</h1>
        <h1>No result for this search query!</h1>
        <h1>No result for this search query!</h1>
        <h4>resultados para:
            <?php the_title(); ?>
        </h4>
    <?php }
    ?>
</section>

<div id="Seach-footer">
    <div>
        <?php require_once 'footer.php'; ?>
    </div>
</div>