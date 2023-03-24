![Logo da novacap](https://assets.infra.grancursosonline.com.br/projeto/novacap-companhia-urbanizadora-da-nova-capital-do-brasil.png)

[Cartões iniciais](#cartões-iniciais) |
[Rede social](#rede-social) |
[Avisos & Comunicados](#aviso-legal--comunicados-oficiais) |
[Notícias](#notícias) |
[TV Novacap](#tv-novacap)

# Bem vindo a pagina intranet da Novacap.
Nessa página você vai encontrar todos os campos de obras e desenvolvimento referente a **Novacap** em todo  _Distrito Federal e entorno._

**Ultimos updates:**

- [x] Wave
- [x] Cartões iniciais.
- [x] Pagina sobre a empresa.


## Cartões iniciais:
* Diretoria Administrativa.
* Diretoria Financeira.
* Diretoria de Edificações.
* Diretoria de Urbanização.
* Diretoria Jurídica.
* Normas Gerais. 
* Scrullum Ponto Eletrônico.
* DIGEP- DRH.
* Ações e projetos.
* Revista.

## Aviso Legal & Comunicados oficiais
### Fique atento aos avisos da Novacap
* Avisos e comunicados oficiais.

## Notícias
### Saiba todas as obras e ações que estão acontecendo em Brasília e no Distrito Federal com participação e fiscalização da Companhia Urbanizadora da Nova Capital


* Obras, ações e notícias.


## TV Novacap
### Todas obras e ações que estão ocorrendo no Distrito Federal


## REDES SOCIAIS
### Abaixo encontramos alguns endereços virtuais da Novacap
[Instagram](https://www.instagram.com/novacapoficial/)

[Youtube](https://www.youtube.com/channel/UC0owvcR8qqAXMGMkUFPDJ1g)

[Twitter](https://twitter.com/novacap)

[Flickr](https://www.novacap.df.gov.br/flickr/)
>
>
# Tecnologias utilizadas no Projeto/Ascom

* PHP

* JavaScript

* HTML

* CSS

* WordPress

#
**Ex PHP do projeto**
```PHP
<?php
require_once 'header.php';
?>

<?php $args = [
    'post_type' => 'videos',
    'post_status' => 'publish',
    'posts_per_page' => 5,
    'custom_fields' => 'link'
];

$i = 0; ?>

<?php
$my_posts = get_posts($args);
foreach ($my_posts as $post) {
    $i++ ?>
    <section>
        <?php $link = get_post_meta($post->ID, 'link', true); ?>
        <div class="gallery">
            <div class="gallery-container">
                <iframe
                    class="<?php echo "gallery-item-" . $i; ?> 
                      <?php echo "gallery-item" ?>"
                    src="<?php recebe($link); ?>" data-index="<?php echo $i; ?>"></iframe>
            </div>
            <div class="gallery-controls"></div>
        </div>
    </section>
<?php } ?>
<script src="<?php echo get_stylesheet_directory_uri() . '/testeSliderjs/script.js' ?>"></script>
...

```
**Ex JavaScript do projeto**
```js
$(".planet").click(function() {
    $('.container').attr("planet-center", this.id);
    if (this.id == "planet1") centerPlanet1();
    if (this.id == "planet2") centerPlanet2();
    if (this.id == "planet3") centerPlanet3();
});

function centerPlanet1() { 
    var tl = new TimelineMax()
    .to('#planet1', 1, {xPercent: 0, z: 1}, 0)
    .to('#planet2', 1, {xPercent: 140, z: -800}, 0)
    .to('#planet3', 1, {xPercent: -140, z: -800}, 0)
    
}

function centerPlanet2() {
    var tl = new TimelineMax()
    .to('#planet1', 1, {xPercent: -140, z: -800}, 0)
    .to('#planet2', 1, {xPercent: 0, z: 1}, 0)
    .to('#planet3', 1, {xPercent: 140, z: -800}, 0);
}

function centerPlanet3() {
    var tl = new TimelineMax()
    .to('#planet1', 1, {xPercent: 140, z: -800}, 0)
    .to('#planet2', 1, {xPercent: -140, z: -800}, 0)
    .to('#planet3', 1, {xPercent: 0, z: 1}, 0);

    ...

```
**Ex HTML do projeto:**
```html
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
   ...

```

**Ex CSS do projeto:**
```css
* {
    margin: 0;
    padding: 0;
}

html,
body {
    scroll-behavior: smooth;
}

body {
    height: 100%;
    width: 100%;
    overflow-x: hidden;
}

#container-cartões {
    position: relative;
    width: 170%;
    margin-left: auto;
    margin-right: auto;
}

#Cartões-iniciais {
    position: relative;
    display: grid;
    grid-template-columns: repeat(5, 1fr);
    grid-column-gap: 0px;
    grid-row-gap: 1em;
    place-items: center;
    width: 1920px;
    height: 125vh;
    bottom: 5rem;
}

#Centered-cards {
    position: relative;
    display: grid;
    grid-template-columns: repeat(5, 1fr);
    width: 80%;
    height: 75%;
    padding: 20px;
    max-width: 1800px;
}

#Cartão {
    display: inline-flex;
    width: 260px;
    height: 370px;
    overflow: hidden;
    margin-left: 50px;
    margin-top: 25px;
    border-radius: 1rem;
    box-shadow: 20px 20px 60px #9f9f9f, -20px -20px 60px #ffffff;
}
...

```



**Propriedade** | **Descrição**
----------- | -----------
*Novacap Ouvidoria* |  https://ouvidoria.df.gov.br/ 
*Sujestão* | https://ouvidoria.df.gov.br/carta-servico-cidadao/
*Acesso a informações* | https://www.df.gov.br/category/acesso-a-informacao/
*Reclamações* | _162_
>
>
**Colaboraodores** | **GitHub page**
-------------- | ----------------
**Fillipe Vitor Figueiredo Ramos** | https://github.com/Fillipe-Figueiredo-Ramos
**Rafael Alencar do Amaral** | https://github.com/RafaelOsama
**Daniel Guilherme Sousa Matuda** | https://github.com/Daniel-matuda
**Gabriel Lobo** | https://github.com/G-Lobo
**Paula Santana** | https://github.com/paula30snt

