<!-- File: src/Template/Articles/index.ctp -->





<?php foreach ($headers as $header): ?>

    
         
            
            

    
    
          
        
<?php    
$cakeDescription = 'zogravity';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $cakeDescription ?>
    </title>

    <?= $this->Html->meta('icon') ?>
    <?= $this->Html->css('zogravity.css') ?>
    
    <link href="https://fonts.googleapis.com/css?family=Raleway:500i|Roboto:300,400,700|Roboto+Mono" rel="stylesheet">
    <link rel="stylesheet" href="/img/">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css" integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css" integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js" integrity="sha512-HGOnQO9+SP1V92SrtZfjqxxtLmVzqZpjFFekvzZVWoiASSQgSr4cw9Kqd2+l8Llp4Gm0G8GIFJ4ddwZilcdb8A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>
<body>
    <div id="main">
        
          <div id ="header">
            <div class="header_menu">
                <div class="zg_logo"><?= $this->Html->image('logo1.png') ?>
                    </div>
                   <div class="bar_mobile"> 
                                    <i class="fa-solid fa-bars js-open-bar"></i>
                        
                                     
                                    <div class="list_menu js-bar">
                                        <i class="fa-solid fa-xmark js-close-bar"></i>
                                        <img src="/img/logo/z0_Gravity_Logo_Couleur.png" alt="" class="none">
                                        <div class="l"><a href=""><?= __('ENTREPRISES') ?></a></div>
                                        <div class="l"><a href=""><?= __('SECTEUR PUBLIC') ?></a></div>
                                        <div class="l"><a href=""><?= __('?? PROPOS') ?></a></div>
                                        <div class="l"><a href=""><?= __('CONTACT') ?></a></div>
                                        <div class="l"><a href=""><?= __('BLOG') ?></a></div>
                                        <div class="l none"><a href=""><?= __('login') ?></a>
                                        
        
                                        </div>
                            </div>
                            
                        </div>
            </div>
            <?= $this->Html->script('slider.js') ?>
           </div>  
                        <?php
   echo $this->Form->create(NULL,array('url'=>'/locale'));
   echo $this->Form->radio("locale",
      [
         ['value'=>'fr','text'=>'English'],
         ['value'=>'es','text'=>'spanish'],
          ['value'=>'vi','text'=>'VietNam'],
         
        
      ]
   );
   echo $this->Form->button('Change Language');
   echo $this->Form->end();
?>

            
<!-- ====================================================================================================================== -->
<div id="lider" style="background-color:<?= $header['my_background'] ?>">
    
    
       
                     <div class="header_container" >
                            
                            <?= $this->Html->image($header->my_img) ?>
                                <div class="item_mute"><i class="fa-solid fa-volume-xmark"></i></div>

                            
                                <div class="container_title" style="color: <?= $header['my_color'] ?>;">
                                        <h1 class="font_blue">  <?= __($header['my_about'])?></h1>
                                
                                
                                <div class="container_about">
                                    <p style="color: <?= $header['my_color'] ?>;"><?= __($header['my_title'])?></p>
                                </div>
                                <div class="container_button">
                                    <a href="" style="color: <?= $header['my_color'] ?>;"><?= __('Descouvrez zO Gravity') ?></a>
                                </div>
                                <div class="container_item">
                                    <i class="fa-solid fa-circle-play"></i><div class="item_vd"><p style="color: <?= $header['my_color'] ?>;"><?= __('voir la vid??o') ?></p></div>
                                </div>
                            </div>
                                
                    </div>
    <div class="list_slider">                
             <div class="list_item">
                            <?php foreach ($datas as $data): ?>
                    

                    


                                        
                            <div class="slide_box1"></div>
                            <div class="slider_content">
                                <div class="slider_titel"><p><?=$data['title'] ?></p>
                                    <div class="next_pre">
                                            <div class="slider_next next" > <i class="fa-solid fa-angle-left"></i></div>
                                            <div class="slider_pre prev" ><i class="fa-solid fa-angle-right"></i></div>
                                    </div>
                                </div>
                                    <div class="slider_h1"><?= $this->Html->image($data->logo) ?></div>
                                    <div class="slider_about"><?= __($data['about'])?></div>
                                    <div class="slider_note">
                                        <div class="note"><a href=""><?= $data['author']?><?= $data['dress']?></a></div> 
                                        <div class="cycle"><a href="<?= $data['link']?>"><?=__('Lire l???article')?><i class="fa-solid fa-arrow-up-right-from-square"></i></a></div> 
                                    </div>
                            
                            
                            
             </div>                               
    
    
    </div>
   
    <!-- ============== -->

    
    
    <div class="list_item">



                          
            <div class="slide_box1"></div>
            <div class="slider_content">
                <div class="slider_titel"><p><?=$data['title']?></p>
                    <div class="next_pre">
                            <div class="slider_next next" > <i class="fa-solid fa-angle-left"></i></div>
                            <div class="slider_pre prev" ><i class="fa-solid fa-angle-right"></i></div>
                    </div>
                </div>
                    <div class="slider_h1"><?= $this->Html->image($data->logo) ?></h1></div>
                    <div class="slider_about"><?= __($data['about'])?></div>
                    <div class="slider_note">
                        <div class="note"><a href=""><?= $data['author']?><?= $data['dress']?></a></div> 
                        <div class="cycle"><a href="<?= $data['link']?>"><?=__('Lire l???article')?><i class="fa-solid fa-arrow-up-right-from-square"></i></a></div> 
                     </div>
            </div>
            
            
            
                                     
    
    
    </div>

    <!-- ============ -->
     

    <div class="list_item">


                          
            <div class="slide_box1"></div>
             <div class="slider_content">
                <div class="slider_titel"><p><?= $data['title'] ?></p>
                    <div class="next_pre">
                            <div class="slider_next next" > <i class="fa-solid fa-angle-left"></i></div>
                            <div class="slider_pre prev" ><i class="fa-solid fa-angle-right"></i></div>
                    </div>
                </div>
                    <div class="slider_h1"><?= $this->Html->image($data->logo) ?></h1></div>
                    <div class="slider_about"><?= __($data['about'])?></div>
                    <div class="slider_note">
                        <div class="note"><a href=""><?= $data['author']?><?= $data['dress']?></a></div> 
                        <div class="cycle"><a href="<?= $data['link']?>"><?=__('Lire l???article')?><i class="fa-solid fa-arrow-up-right-from-square"></i></a></div> 
                     </div>
            </div>
            
            
            
                                  
    
    
    </div>
</div>
<?php endforeach; ?> 
   
    <script>
    $(document).ready(function(){
    $('.list_slider').slick({
    prevArrow: $('.prev'),
    nextArrow: $('.next'),
    }

    );
    });;
    </script>

</div>

   
         

     <!-- ========================================================================================================================================    -->
         
        <div id="content">
            <div class="content_pfc">
                <div class="content_pfc_titel"><?= __('POUR FAIRE COURT.') ?></div>
                <div class="content_pfc_text">
                <h4>   <?= __('Z0 Gravity est un logiciel de gestion multi-projets : </h4>
                    quelle que soit leur complexit??,
                     vous g??rez facilement les plannings,
                     les budgets et les ressources humaines de vos projets par un 
                     usage transversal et collaboratif.') ?> </div>
            </div>
            <div class="content_layout">
                <div class="content_layot_text">
                    <div class="fr"><h1><?= __('Notre engagement:') ?></h1></div>
                    <div class="p"><p><?= __('Cest aider tout type doranisation ?? resaliser ses projest avec un seul mot dorder :') ?></p></div>
                    <div class="last"><h1><?= __('sim-pli-ci-t??!') ?></h1></div>
                    
                </div>
                <div class="content_layout_inset"><?= $this->Html->image('mo.png') ?></div>
                <div class="content_layot_img"><?= $this->Html->image('m1.jpg') ?></div>
            </div>
            <div class="content_about">
                <div class="content_about_title"><?= __('D??couvrez l???univers z0 Gravity') ?></div>
                <div class="content_about_text"><?= __('Plannings, budgets, calendriers???
                     En un clin d??il, vous avez une vision globale et strat??gique 
                    de lavanc??e de vos projets en temps r??el !') ?>
                </div>
                <div class="conteant_about_button"><i class="fa-solid fa-play"></i> <a href=""><?= __('Pr??sentation vid??o') ?></a></div>
            </div>
            <div class="content_app">
            <?= $this->Html->image('app.jpg') ?>
            </div>   

        </div>



        <div id="news">
            <div class="news1">
                <div class="news_vous_title"><?= __('Vous ??tes???') ?></div>
                <div class="news_vous">
                
                    <div class="news_vous_go">
                        <div class="vous_go_item"><i class="fa-solid fa-file-signature" style="color:#049BF7 ;"></i></div>
                        <div class="vous_go_about"><h2><?= __('Une entreprise') ?></h2><p> <?= __('Jouez collectif :<br>') ?> <?= __('f??d??rez vos ??quipes autour dun objectif commun.') ?></p></div>
                        <div class="vous_go_button"><a href="" style="color: #fff; text-decoration: none;"><?= __('3,2,1??? Go !') ?></a></div>
                    </div>
                    <div class="news_vous_comment">
                        <div class="vous_comment_item"><i class="fa-solid fa-hospital" style="color:#FF7D66 ;"></i></div>
                        <div class="vous_comment_about"><h2><?= __('Une collectivit??') ?></h2><p><?= __('Rassemblez les acteurs de <br>votre projet via un logiciel commun !') ?></p></div>
                        <div class="vous_comment_button"><a href="" style="color: #fff; text-decoration: none;"><?= __('D??couvrez comment') ?></a></div>
                    </div>
                    <div class="news_vous_commemcons">
                        <div class="vous_commemcons_item"><i class="fa-solid fa-map-location-dot" style="color:#FFD051 ;"></i></div>
                        <div class="vous_commemcons_about"><h2><?= __('Un promeneur') ?></h2><p><?= __('??gar?? Bienvenue !<br> Installez-vous et laissez-vous guider.') ?></p></div>
                        <div class="vous_commemcons_button"><a href="" style="color: #fff; text-decoration: none;"><?= __('Commen??ons par ici') ?></a></div>
                    </div>
                </div>
            </div>
            <div class="news_nos">
                <div class="nos_title"><h1><?= __('Nos articles') ?></h1></div>
                <div class="nos_content">
                    <div class="conten_nos1">
                        <div class="conten_nos1_img"><?= $this->Html->image('new2.jpg') ?></div>
                        <div class="conten_nos1_caption"><?= __('Comment choisir<br> votre logiciel de<br> gestion de projet') ?></div>
                        
                        <div class="conten_nos1_time">
                            <div class="conten_nos1_note"><?= __('ENTREPRISES') ?></div>15 min
                        </div>
                        <div class="conten_nos1_about"><?= __('Bien choisir son logiciel de
                             gestion de projet ou son outil de gestion de projet est une question cruciale pour les entreprises.') ?></div>
                        <div class="conten1 nos_btn"><a href=""><?= __('Lire l???article') ?></a></div>
                    </div>
                    <div class="conten_nos2">
                        <div class="conten_nos2_img"><?= $this->Html->image('news3.jpg') ?></div>
                        <div class="conten_nos2_char">
                            <div class="conten_nos2_caption"><?= __('Logiciel de gestion de projet secteur public') ?></div>
                            
                            <div class="conten_nos2_time">
                                <div class="conten_nos2_note"><?= __('SECTEUR PUBLIC') ?></div>10 min
                            </div>
                            <div class="conten_nos2_about"><?= __('z0 Gravity est un logiciel de gestion de projet d??velopp?? avec et pour des collectivit??s territoriales. Gr??ce ?? son interface simple et son tableau de bord embarqu??, ce logiciel de gestion de projet secteur public permet de r??pondre efficacement aux contraintes de temps et de budget des collectivit??s territoriales.') ?></div>
                            <div class="conten2 nos_btn"><a href=""><?= __('Lire l???article') ?></a></div>
                        </div>
                    </div>
                    <div class="conten_nos4">
                        <div class="conten_nos4_img"></div>
                        <div class="conten_nos4_caption"><?= __('Logiciel de gestion de projet en ligne SaaS') ?></div>
                        
                        <div class="conten_nos4_time">
                            <div class="conten_nos4_note"><?= __('PMO') ?></div>8 min
                            
                        </div>
                        <div class="conten_nos4_about"><?= __('La gestion d???un projet implique en r??alit?? de r??aliser une succession de t??ches tr??s diff??rentes pour l???entreprise et qu???il faut, bien souvent, mener de front : planification, r??partition des ressources, des t??ches, activit??s de reporting, suivi de l???avanc??e des projets, de la consommation des budgets, etc.') ?></div>
                        <div class="conten4 nos_btn"><a href=""><?= __('Lire l???article') ?></a></div>
                    </div>

                    <div class="conten_nos3">
                        <div class="conten_nos3_img"></div>
                        <div class="conten_nos3_caption"><?= __('7 conseils cl??s pour bien s?????quiper d???un outil de gestion de projet') ?></div>
                        
                        <div class="conten_nos3_time">
                            <div class="conten_nos3_note"><?= __('CLIENT') ?></div>12 min
                        </div>
                        <div class="conten_nos3_about"><?= __('Vous avez d??cid?? qu???il ??tait temps d???investir dans un outil de gestion de projet pour votre entreprise ? Vous souhaitez gagner en productivit?? et en efficacit?? dans la gestion de vos affaires courantes et, par la m??me occasion, en faire profiter tous les services ? C???est une tr??s bonne id??e.') ?></div>
                        <div class="conten3 nos_btn"><a href=""><?= __('Lire l???article') ?></a></div>
                    </div>
                </div>
                <div class="button_content1 button"><a href=""><?= __('Voir tous les articles') ?></a></div>
                <div class="conten_titlel_last">
                    <h1><?= __('Assez parl?? de nous.') ?></h1>
                      <p><?= __('Parlez-nous de vous !') ?></p>
                </div>
                <div class="button_content2 button"><a href=""><?= __('On discute !') ?></a></div>
            </div>
        </div>


        <div id="footer">
            <div class="footer_menu">
                <div class="footer_logo">
                    <div class="logo_img"><img src="https://www.z0gravity.com/storage-z0G/2019/05/z0_Gravity_Logo_BlancBleu-1.svg" alt=""></div>
                    <div class="logo_slogan"><?= __('Ensemble, on va plus loin.') ?></div>
                </div>
                <div class="footer_list">
                    <ul>
                        <li><?= __('Entreprises') ?></li>
                        <li><?= __('Collectivit??s') ?></li>
                        <li><?= __('?? propos') ?></li>
                        <li><?= __('Contact') ?></li>
                        <li><?= __('Blog') ?></li>
                    </ul>
                </div>
                <div class="footr_infor">
                    <div class="infor_img">
                        <div class="information"><?= __('SUIVEZ-NOUS') ?></div>
                        <div class="img_info"><i class="fa-brands fa-facebook-f"></i>
                                              <i class="fa-brands fa-twitter"></i>
                                              <i class="fa-brands fa-vimeo-v"></i>
                        </div>
                    </div>
                    <div class="setting button "><button href="" class="js-open-model"><i class="fa-solid fa-earth-asia"> </i><?= __('changer de r??gion') ?></button></div>
                </div>
            </div>
            <div class="footer_last">
                
                    <a><?= __('?? 2019 Globalsi SAS') ?></a>
                     <a><?= __('Plan du site') ?></a>
                    <a><?= __('Contactez-nous') ?></a>
                    <a><?= __('Mentions l??gale') ?></a>
            </div>
    </div>
        <div class="model js-model">
            <div class="set_changer">
                <div class="chenger_tille">
                    <h2><?= __('Changer de r??gion') ?></h2>
                    <i class="fa-solid fa-xmark js-close-model" style="cursor: pointer;"></i>
                </div>
                <div class="chenger_about">
                    <?= __('Si vous s??lectionnez une autre r??gion,
                     la langue et le contenu de z0gravity.com changeront.') ?>
                </div>
                <div class="langue">
                    <ul>
                    <div class="ul">
                        <li>Deutsch </li>     
                        <li>English </li>
                        <li>Espa??ol </li>
                    </div>
                    <div class="ul">
                        <li>Fran??ais </li>
                        <li>Nederlands</li>
                        <li>Polski </li>
                        
                    </div>
                    <div class="ul">
                        <li>??????????????</li>
                        <li>Bokm??l</li>
                        <li>???????????????? </li>
                    </div>
                    <div class="ul">
                        <li>Portugu??s </li>
                        <li>?????????</li>
                        <li>????????????</li>
                    </div>
                    </ul>
                </div>
            </div>

        </div>
        <?= $this->Html->script('changer.js') ?>
        <!-- <script>
                const openMdal = document.querySelector('.js-open-model')
                const settingChanger = document.querySelector('.js-model')
                const closeMdal = document.querySelector('.js-close-model')
                function showChanger(){
                    settingChanger.classList.add('open')
                }
                function hideChanger(){
                    settingChanger.classList.remove('open')
                }
                openMdal.addEventListener('click', showChanger)
                closeMdal.addEventListener('click', hideChanger)

        </script> -->
  
</body>
</html>

<?php endforeach; ?> 