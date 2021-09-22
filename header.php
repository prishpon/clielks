<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>cli</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <?php wp_head(); ?>
  </head>
<body>
  <section class="main-header">
      <header class="container">
        <div class="topheader row">
           
               <div class="top-item row">
                  <div>
                  <i class="fa fa-globe" aria-hidden="true"></i>
                  </div>
                  <div>
                    <img src="<?php bloginfo("template_directory"); ?> /img/ru.png" alt="">
                    <div class="top-sub-item">Rus</div>
                  </div>
                  <div>
                  <img src="<?php bloginfo("template_directory"); ?>/img/uk.png" alt="">
                    <div class="top-sub-item">Ukr</div>
           
                  </div>      
               </div>
               <div class="top-item row">
                                <i class="fa fa-map-marker" aria-hidden="true"></i>
                                <div class="top-sub-item">
                      Выбрать ваш город
                       установки потолков
                                  </div>
               </div>
               <div class="top-item row">
                   <i class="fa fa-clock-o" aria-hidden="true"></i>
                     <div class="top-sub-item">
                            пн-вс 9:00-18:00
                      </div>
               </div>
                <div class="top-item row">
                   <img class="top-social" src="<?php bloginfo("template_directory"); ?>/img/Telegram_H.png" alt="">
                    <img class="top-social" src="<?php bloginfo("template_directory"); ?>/img/viber_h.png" alt="">
                    <img class="top-social" src="<?php bloginfo("template_directory"); ?>/img/whatsappS-1.png" alt="">
                </div>
                 <div class="top-item row">
                   <div>
                      <i class="fa fa-phone" aria-hidden="true"></i>
                   </div>
                      <div class="column">
                         <div class="top-sub-item">
                             +38 (067) 611 66 12
                         </div>
                         <div class="top-sub-item">
                             +38 (067) 611 66 12
                         </div>
                      </div>
                       <div class="column">
                       <div class="top-sub-item">
                             +38 (067) 611 66 12
                         </div>
                         <div class="top-sub-item">
                             <button class="primary">
                               Заказать звонок
                             </button>
                         </div>
                       </div>
                  </div>
           </div>
              
 <div class="midheader container">
                     <nav>
                           <?php wp_nav_menu( [
		                          'theme_location'  => 'primary',
                              'depth'           => 2, 
                              'container'       => false,
	                          ] ); ?>
                       </nav>
            </div> 
    </header>