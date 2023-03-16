![Logo da novacap](https://assets.infra.grancursosonline.com.br/projeto/novacap-companhia-urbanizadora-da-nova-capital-do-brasil.png)

[Cartões iniciais](#cartões-iniciais) |
[Rede social](#rede-social) |
[Avisos & Comunicados](#aviso-legal--comunicados-oficiais) |
[Notícias](#notícias) |
[TV Novacap](#tv-novacap)

# Bem vindo a pagina intranet da Novacap.
Nessa página você vai encontrar todo campo de obras e desenvolvimento referente a **Novacap** em todo  _Distrito Federal e entorno._

**Ultimas updates:**

- [x] Pagina sobre a empresa.
- [x] Cartões iniciais.


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


### Rede social:
[Instagram](https://www.instagram.com/novacapoficial/)

[Youtube](https://www.youtube.com/channel/UC0owvcR8qqAXMGMkUFPDJ1g)

[Twitter](https://twitter.com/novacap)

[Flickr](https://www.novacap.df.gov.br/flickr/)
>
>
>Acima encontramos alguns endereços virtuais da Novacap
>
>Avisos e comunicados oficiais
>
>Notícias
>
>TV Novacap
>
>
#
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


<!--Navbar laranja e imagem-->

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
    ```

**Ex CSS do projeto:**
```css
#Cartões-iniciais {
    position: relative;
    display: grid;
    grid-template-columns: repeat(5, 1fr);
    grid-column-gap: 0px;
    grid-row-gap: 1em;
    align-items: center;
    justify-items: end;
    float: left;
    top: 15rem;
    width: 1800px;
    height: 900px;
}

.Button-Download {
    display: inline-block;
    position: relative;
    width: 19rem;
    height: 4.8rem;
    right: 67%;
    bottom: 11rem;
    padding: 10px 25px;
    background-color: #95cd01;
    color: white;
    text-align: center;
    border: none;
}

.Button-Download:hover {
    background-color: #95cd01;
    color: white;
}

.Button-Download:before,
.Button-Download:after {
    content: ' ';
    display: block;
    position: absolute;
    left: 15px;
    top: 52%;
}
...

```



**Propriedade** | **Descrição**
----------- | -----------
*Novacap Ouvidoria* |  https://ouvidoria.df.gov.br/ 
*Sujestão* | https://ouvidoria.df.gov.br/carta-servico-cidadao/
*Acesso a informações* | https://www.df.gov.br/category/acesso-a-informacao/
*Reclamações* | _162_
