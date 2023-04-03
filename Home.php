<!DOCTYPE html>
<html lang="pt_br">

<head>
    <div>
        <?php
        require_once 'header.php';
        ?>
    </div>
    <!--libras-->
    <div vw class="enabled">
        <div vw-access-button class="active"></div>
        <div vw-plugin-wrapper>
            <div class="vw-plugin-top-wrapper"></div>
        </div>
    </div>
</head>

<body>
    <!-- CARTOES INICIAIS -->
    <div id="Centered-cards">
        <div id="Cartões-iniciais">
            <?php
            $args = array(
                'post_type' => 'Cartões',
                'post_status' => 'publish',
                'posts_per_page' => 10,
                'custom_fields' => array('link', 'Imagem', 'Cor', 'ClassAnchor', 'Anchor'),
            );

            $my_posts = get_posts($args);
            foreach ($my_posts as $post) {
                ?>
                <?php
                $link = get_post_meta($post->ID, 'link', true);
                $BackgroundColor = get_post_meta($post->ID, 'Cor', true);
                $Anchor = get_post_meta($post->ID, 'Anchor', true);
                $ClassAnchor = get_post_meta($post->ID, 'ClassAnchor', true);
                $Image = get_post_meta($post->ID, 'Imagem', true);
                ?>
                <div id="Cartão" class="<?php echo "Item-" . $BackgroundColor; ?>">
                    <div id="<?php echo "CardsIcons" . $Image ?>">
                        <?php the_post_thumbnail(); ?>
                    </div>
                    <ul id="Cards-Content">
                        <li class="Content-item">
                            <div>
                                <h2 class="TituloCartões">
                                    <?php echo $post->post_title; ?>
                                </h2>
                            </div>
                        </li>
                        <li class="Content-item">
                            <div>
                                <p class="TextoCartões">
                                    <?php echo $post->post_excerpt; ?>
                                </p>
                            </div>
                        </li>
                        <li class="Content-item">
                            <div class="<?php echo "Button-" . $ClassAnchor; ?>">
                                <a href="<?php recebe($link); ?>" target="_blank">
                                    <p id="<?php echo "ButtonTittle" . $ClassAnchor; ?>">
                                        <?php echo $Anchor; ?>
                                    </p>
                                </a>
                            </div>
                        </li>
                    </ul>
                </div>
            <?php } ?>
        </div>
    </div>

    <!-- AVISO LEGAL -->

    <section id="AvisosContainer">
        <div id="Avisos">
            <ul>
                <li>
                    <h1>Aviso Legal & Comunicados oficiais</h1>
                </li>
                <li>
                    <p>Fique atento aos avisos da Novacap</p>
                </li>
            </ul>
        </div>
    </section>

    <!--avisos-->
    <div id="AvisosOficiais">
        <?php $args = [
            'post_type' => 'aviso',
            'post_status' => 'publish',
            'posts_per_page' => 6
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
        <nav>
            <a href="#" class="vejaTodos">Veja todos >>></a>
        </nav>
    </div>

    <section id="noticiasContainer">
        <div id="noticias">
            <ul>
                <li>
                    <h1>Notícias</h1>
                </li>
                <li>
                    <p>Saiba todas as obras e ações que estão acontecendo em Brasília e no Distrito Federal com
                        participação
                        e
                        fiscalização da Companhia Urbanizadora da Nova Capital</p>
                </li>
            </ul>
        </div>
    </section>

    <!-- aqui ficará o slider -->

    <div class="row">

        <div class="col mb-5">

            <div id="carouselBSWP" class="carousel slide" data-ride="carousel">

                <div class="carousel-inner">

                    <?php //args
                    $args = [
                        'post_type' => 'noticias',
                        'post_status' => 'publish',
                        'posts_per_page' => 8,
                        'category_name' => 'destaque'
                    ];
                    $i = 0;

                    ?>

                    <?php $my_posts = get_posts($args);
                    foreach ($my_posts as $post) { ?>

                        <div class="carousel-item <?php $i++;
                        if ($i == 1) {
                            echo 'active';
                        } ?>">
                            <?php the_post_thumbnail(); ?>
                            <div class="carousel-title-box"></div>
                            <div>
                                <h3 class="tituloCarousel">
                                    <?php
                                    echo $post->post_title;
                                    ?>
                                </h3>

                                <h5 class="infoCarousel">
                                    <?php
                                    echo $post->post_excerpt;
                                    ?>
                                </h5>
                            </div>
                        </div>
                    <?php } ?>
                </div>

                <a class="carousel-control-prev" href="#carouselBSWP" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon seta-1"></span>
                    <span class="sr-only">Anterior</span>
                </a>

                <a class="carousel-control-next" href="#carouselBSWP" role="button" data-slide="next">
                    <span class="carousel-control-next-icon seta-2"></span>
                    <span class="sr-only">Próximo</span>
                </a>
            </div>

        </div>

    </div>

    <!-- loop de repetição dos blocos -->
    <section id="Noticias">
        <?php $args = [
            'post_type' => 'noticias',
            'post_status' => 'publish',
            'posts_per_page' => 6,
            'category_name' => 'blocos'
        ];

        $my_posts = get_posts($args);
        foreach ($my_posts as $post) { ?>
            <!-- blocos -->
            <div id="CardsContainer">
                <div id="NoticiasCard">
                    <ul>
                        <li>
                            <?php the_post_thumbnail(); ?>
                        </li>
                        <li id="NoticiasData">
                            <p>
                                <?php echo get_the_date(); ?>
                            </p>
                        </li>
                        <li>
                            <h3 id="NoticiasTittle">
                                <?php echo $post->post_title; ?>
                            </h3>
                        </li>
                        <li>
                            <h4 class="h4">
                                <?php echo $post->post_excerpt; ?>
                            </h4>
                        </li>
                    </ul>
                </div>
            </div>
        <?php } ?>
    </section>

    <!-- fim dos blocos -->
    <nav>
        <a class="noticiasVeja" href="#">Veja todos >>></a>
    </nav>

    </div>
    <!-- TV NOVACAP -->
    <section id="tvNovacap">
        <div id="tvTitulo">
            <img id="TvImg" src="<?php echo get_stylesheet_directory_uri() . '/assets/img/TV.png' ?>"
                alt="Logo TV NOVACAP">
            <h1>NOVACAP</h1>
        </div>
        <p id="tvSub">Saiba todas as obras e ações que estão acontecendo no Distrito Federal</p>
    </section>
    <!-- carrossel -->
    <div>
        <?php include 'funcYT.php'; ?>
    </div>

    <?php
    require_once 'footer.php';
    ?>
</body>

</html>