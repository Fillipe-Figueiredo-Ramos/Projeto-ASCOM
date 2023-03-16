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
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>teste carrossel</title>
</head>

<!-- CSS -->
<style>
    * {
        margin: 0;
        padding: 0;
    }

    body {
        padding: 20px;
        background: #eee;
        user-select: none;
    }

    /* remove os indicadores de posição */
    [type=radio] {
        display: none;
    }

    #slider {
        margin-left: 646px;
        height: 35vw;
        position: relative;
        perspective: 1000px;
        transform-style: preserve-3d;
    }
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

.nav-azul {
    position: absolute;
    width: 100%;
    height: 10.5%;
    top: 0px;
    background-color: #09044c;
}

img.custom-logo {
    position: absolute;
    margin-top: 13rem;
    margin-left: 8rem;
    height: 87px;
    width: 368px;
}

.imagem-banner {
    width: 2019px;
    margin-top: -1px;
    text-align: center;
    z-index: -2;
    margin-left: -168px;
    margin-right: 0px;
}

.imagem-banner img {
    height: 872px;
    width: 2019px;
}
...

```



**Propriedade** | **Descrição**
----------- | -----------
*Novacap Ouvidoria* |  https://ouvidoria.df.gov.br/ 
*Sujestão* | https://ouvidoria.df.gov.br/carta-servico-cidadao/
*Acesso a informações* | https://www.df.gov.br/category/acesso-a-informacao/
*Reclamações* | _162_
