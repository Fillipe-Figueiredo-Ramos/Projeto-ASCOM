<?php
add_action('after_setup_theme', 'my_theme_setup');

function my_theme_setup()
{
    function menu()
    {
    add_theme_support('nav-menu');
    }
    register_nav_menus(
        array(
            'location' => 'Menu-principal',
            'descrepition'=> 'Menu',
        )
    );
}
//logo pelo wordpress

function logo()
{
    add_theme_support('custom-logo');
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'logo');


//banner de cima

function banners()
{
    register_post_type(
        'banners',
        array(
            'labels' => array('name' => 'Banner'),
            'public' => true,
            'menu_position' => 0,
            'menu_icon' => 'dashicons-format-image',
            'taxonomies' => array('category'),
            'supports' => array('title', 'editor', 'thumbnail')
        )
    );
}
add_action('init', 'banners');


//função capa da revista

function revista()
{
    register_post_type(
        'revista',
        array(
            'labels' => array('name' => 'Revista'),
            'public' => true,
            'menu_position' => 2,
            'menu_icon' => 'dashicons-book-alt',
            'supports' => array('title', 'thumbnail', 'editor')
        )
    );
}
add_action('init', 'revista');


//avisos & comunicados

function aviso()
{
    register_post_type(
        'aviso',
        array(
            'labels' => array('name' => 'Aviso'),
            'public' => true,
            'menu_position' => 3,
            'menu_icon' => 'dashicons-format-image',
            'supports' => array('title', 'editor', 'thumbnail')
        )
    );
}
add_action('init', 'aviso');


//noticias

function noticias()
{
    register_post_type(
        'noticias',
        array(
            'labels' => array('name' => 'Noticias'),
            'public' => true,
            'menu_position' => 4,
            'menu_icon' => 'dashicons-media-text',
            'taxonomies' => array('category'),
            'supports' => array('title', 'editor', 'custom-fields', 'thumbnail', 'categories', 'excerpt')
        )
    );
}
add_action('init', 'noticias');


//conversao de yt watch para embed

function recebe($link)
{
    $videoURLConvertida = str_replace("watch?v=", "embed/", $link);
    echo $videoURLConvertida;
}


//funcao para adicionar os videos do youtube

function youTube()
{
    register_post_type(
        'videos',
        array(
            'labels' => array('name' => 'YouTube'),
            'public' => true,
            'menu_position' => 5,
            'menu_icon' => 'dashicons-video-alt3',
            'supports' => array('title', 'custom-fields'),
            'rewirte' => array('slug' => 'yt')
        )
    );
}
add_action('init', 'youTube');


//funcao para a foto das diretorias

function diretorias()
{
    register_post_type(
        'diretorias',
        array(
            'labels' => array('name' => 'Diretorias'),
            'public' => true,
            'menu_position' => 6,
            'menu_icon' => 'dashicons-buddicons-buddypress-logo',
            'taxonomies' => array('category'),
            'supports' => array('title', 'editor', 'custom-fields', 'thumbnail', 'revisions', 'excerpt')
        )
    );
}
add_action('init', 'diretorias');


//funcao para os normativos,relatorios e procedimentos

function normativos()
{
    register_post_type(
        'normas',
        array(
            'labels' => array('name' => 'Normativos, Relatórios e Procedimentos'),
            'public' => true,
            'menu_position' => 7,
            'menu_icon' => 'dashicons-archive',
            'taxonomies' => array('category'),
            'supports' => array('title', 'editor', 'excerpt')
        )
    );
}
add_action('init', 'normativos');

function custom_search_result($querry)
{
    if ($querry->is_main_querry() && !is_admin() && $querry->is_search()) {
        $querry->set('post_type', array('post'));
        $querry->set('post_pet_page', -1);
    }
}
add_action('pre_get_posts', 'custom_search_result');


add_theme_support('post-thumbnails');
function Cartões()
{
    register_post_type(
        'Cartões',
        array(
            'labels' => array('name' => 'Cartões Iniciais'),
            'public' => true,
            'menu_position' => 1,
            'menu_icon' => 'dashicons-list-view',
            'description' => __('Post Type Description', 'text_domain'),
            'supports' => array('title', 'thumbnail', 'excerpt', 'categories','custom-fields'),
            'taxonomies' => array('category', 'post_tag'),
            'capability_type' => 'page',
        )
    );
    add_theme_support('post-thumbnails');
}
add_action('init', 'Cartões');
?>