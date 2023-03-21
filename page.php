<?php 
require_once 'header.php';
?>

<!-- diretorias -->
<!--Navbar laranja e imagem-->
<div class="view2 intro hm-purple-light" id="starter" style="z-index: 2;">

    <?php 
        the_custom_logo();
        
        $args = array(
    'post_type' => 'banners',
    'post_status' => 'publish',
    'posts_per_page' => 1,
    'category_name' => 'principal'
);
$query = new WP_Query($args);
if($query -> have_posts()):
    while($query -> have_posts()): $query -> the_post();
    ?>
            <div class="imagem-banner">
                <?php the_post_thumbnail();?>
            </div>
    <?php
    endwhile;   
endif;

    ?>


</div>
    <img id="wave" src="<?php echo get_stylesheet_directory_uri(). '/assets/img/wave-ai.svg'?>" alt="">

    <!--Fim da Navbar laranja e imagem-->

    <!--body-->

    <!--libras-->
    <div vw class="enabled">
        <div vw-access-button class="active"></div>
        <div vw-plugin-wrapper>
            <div class="vw-plugin-top-wrapper"></div>
        </div>
    </div>


    <?php $args = [
        'post_type' => 'diretorias',
        'post_status' => 'publish',
        'posts_per_page' => 1,
        'category_name' => 'financeiro'
    ];
    $my_posts = get_posts($args);
    foreach ($my_posts as $post){ 
    ?>
<!--body-->
<div class="container">
        <!--Foto do presidente e título-->
        <div class="row justify-content-center">
            <div class="item col-12 col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-4">
                <div class="img_presidente">
                    <img id="fotoPresidente" <?php the_post_thumbnail(); ?> > 
                </div>
                <div class="paralelograma text-white">
                    <ul>
                        <li id="titulo"><?php echo $post->post_title;?></li>
                        <li id="xxx"><?php echo get_post_meta($post->ID, 'nome', true);?></li>
                        <li id="conteudo"><?php echo get_post_meta($post->ID, 'formacao', true);?></li>
                    </ul>
                </div>

                <!--texto lado esquerdo-->
                <div id="texto">
                    <h2 class="trasso" id="T1"><?php echo $post->post_excerpt;?></h2>
                    <p id="P1"><?php echo $post->post_content;?></p>
                    <div id="NRP">
                        <h2 class="trasso" id="T2"><svg xmlns="http://www.w3.org/2000/svg" width="35" height="48"
                                fill="currentColor" class="bi bi-plus-circle" viewBox="0 0 16 16">
                                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                                <path
                                    d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z" />

                                    <?php }?>
                            </svg> Normativos, Relatórios e Procedimentos </h2>

                        <ul>
                            <ul>
                            <?php $args = [
                                'post_type' => 'normas',
                                'post_status' => 'publish',
                                'posts_per_page' => 8,
                                'category_name' => 'financeiro'
                            ];
                                $my_posts = get_posts($args);
                                foreach ($my_posts as $post){
                            ?>
                                <li><?php echo $post->post_content; } ?></li>
                            </ul>
                        </ul>
                    </div>
                </div>
            </div>
            <!--Lado Direito-->
                        
            <!--Organograma-->
            <?php $args = [
        'post_type' => 'diretorias',
        'post_status' => 'publish',
        'posts_per_page' => 1,
        'category_name' => 'financeiro'
    ];
    $my_posts = get_posts($args);
    foreach ($my_posts as $post){
    ?>
            <div class="col-12 col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-4" id="ladoDir">
                <div id="organogramaDU">
                    <div id="DiretU">
                        <p><?php echo get_post_meta($post->ID, 'diretoria', true);?></p>
                    </div>
                    <div id="DEINFRA">
                        <p>DEINFRA</p>
                        <ul>
                            <li>NUASAF</li>
                            <li>DIPROJ</li>
                            <li>DIOB</li>
                            <li>DIMAD</li>
                            <li>DIMAV</li>
                            <li>DIOD</li>
                            <li>DIATEC</li>
                            <li>DIMAM</li>
                        </ul>
                    </div>

                    <div id="DPJ">
                        <p>DPJ</p>
                        <ul>
                            <li>DIAGRO</li>
                            <li>DIPROP</li>
                            <li>DIAVE</li>
                            <li>DIMAVE</li>
                            <li>DIOC</li>
                        </ul>
                    </div>
                </div>
                <!--Fim do Organograma-->

                <!--Normas gerais-->
                <div id="NormasGerais">
                    <h2 class="trasso3" id="T3">Normas gerais</h2>
                    <ul>
                        <li><a href="./documentos/Codigo_de_Etica_Conduta_e_Integridade.pdf">Código de ética</a></li>
                        <li><a href="./documentos/Organograma-2022.jpeg">Organograma</a></li>
                        <li><a href="./documentos/Politica_de_Transacoes_com_Partes_Relacionadas.pdf">Política de
                                Transação</a></li>
                        <li><a href="">Prestação de Contas</a></li>
                        <li><a href="./documentos/Regimento-Interno-2019-2020.pdf">Regimento Interno</a></li>
                        <li><a href="./documentos/Regimento_Interno_Elegibilidade.pdf">Regimento do Comitê de
                                Elegibilidade</a></li>
                        <li><a href="./documentos/REGULAMENTO_DE_LICITACOES_E_CONTRATOS.pdf">Regulamento de Licitações e
                                Contratos</a></li>
                    </ul>
                    <br>
                    <br>
                    <br>
                    <a id="VJ" href="">Veja Todos >>></a>
                </div>
            </div>
        </div>
    </div>
    <div id="TelefoneSessão">
        <h1>Telefone da sessão:</h1>
        <p><?php echo get_post_meta($post->ID, 'telefone',true);?></p>
    </div>


    <?php }?>








<?php
require_once 'footer.php';
?>