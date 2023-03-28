<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        <?php bloginfo('name'); ?>
    </title>
    <?php wp_head(); ?>
    <!-- RESET -->
    <link rel="stylesheet" href="<?= get_template_directory_uri() . '/css/reset.css' ?>">
    <!--BOOTSTRAP -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- LINKS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="<?= get_template_directory_uri() . '/css/bootstrap.css' ?>">
    <!-- CSS -->
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() . '/css/styless.css' ?>">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() . '/css/dropdown.css' ?>">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() . '/css/caroselteste.css' ?>">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() . '/testeSliderjs/style.css' ?>">
</head>

<body>

    <!--nav azul-->
    <header class="nav-azul">
        <div class="Tudo-de-cima">
            <div class="s130">
                <form action="<?php echo esc_url(home_url()); ?>" method="get">
                    <div class="inner-form">
                        <div class="input-field first-wrap">
                            <div class="svg-wrapper">
                                <svg class="aaa" xmlns="https://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24">
                                    <path
                                        d="M15.5 15h-.791-.28-.27C15.41 12.59 16 11.11 16 9.5 16 5.91 13.09 3 9.5 3S3 5.91">
                                    </path>
                                </svg>
                            </div>
                            <input id="search" type="text" placeholder="Busque por notícias, posts ou cards." name="s"
                                required="required" />
                        </div>
                        <div class="input field second-wrap">
                            <button class="btn-search" type="submit"><i
                                    class="fa-solid fa-magnifying-glass"></i></button>
                        </div>
                    </div>
                </form>
            </div>

            <section id="icons">
                <a target="_blank" href="https://www.flickr.com/photos/agenciabrasilia/albums/72157672914519472/"
                    class="fa fa-flickr"></a>
                <a target="_blank" href="https://www.instagram.com/novacapoficial/" class="fa fa-instagram"></a>
                <a target="_blank" href="https://www.facebook.com/novacapoficial/" class="fa fa-facebook"></a>
                <a target="_blank" href="https://twitter.com/novacap" class="fa fa-twitter"></a>
            </section>
    </header>