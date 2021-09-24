  <footer> 
    <section class="top-footer container">
       <div class="column">
          <div class="f-logo">
             <img src="<?php bloginfo("template_directory"); ?>/img/logo.png" alt="" class="logo">
          </div>
          <p>Вы решили создать уникальный дизайн Вашего дома?</br>
Решили создать атмосферу роскоши или минимализма?</br> Компания “Гарпун” поможет Вам!</p>
                 <div class="row f-sub-item mt-20">
                     <div clas="mr-20">
                         <p>Наш поставщик </br>
                         натяжных потолков</p>
                     </div>
                     <div>
                        <img src="<?php bloginfo("template_directory"); ?>/img/logo.png" alt="" class="logo">
                     </div>
                 </div>
                 <div class="row f-sub-item mt-20 mr-20">
                     <div class="column">
                        <h5>Отзывы о нас:</h5>
                        <img src="<?php bloginfo("template_directory"); ?>/img/logo.png" alt="" class="logo">
                     </div>
                     <div>
                     <img src="<?php bloginfo("template_directory"); ?>/img/logo.png" alt="" class="logo">
                     </div>
                 </div>
</div>
       <div class="column">
           <div class="f-menu">
              <h6 class="mb-30">Разделы</h6>
                <ul class="footer-menu">
                  <li>Партнерам</li>
                  <li>Портфолио</li>
                  <li>Филиалы</li>
                  <li>О компании</li>
                  <li>Карта сайта</li>
                </ul>
            </div>
             <div class="f-loct mt-20">
             <h6 class="mb-30">Мы в ЭпицентрахРазделы</h6>
                  <div><a href="">Днепр</a></div>
                  <div><a href="">Львов</a></div>
                  <div><a href="">Ровно</a></div>
                  <div><a href="">Стрый</a></div>
            </div>
       </div>
       <div class="column">
          <div class="f-loct">
          <h6 class="mb-30">Натяжные потолки</h6>
                  <div><a href="">Глянцевые натяжные потолки</a></div>
                  <div><a href="">Матовые натяжные потолки</a></div>
                  <div><a href="">Сатиновые натяжные потолки</a></div>
                  <div><a href="">Многоуровневые натяжные потолки</a></div>
                  <div><a href="">Натяжные потолки с фотопечатью</a></div>
                  <div><a href="">Натяжные потолки с криволинейным швом</a></div>
                  <div><a href="">Мансардные натяжные потолки</a></div>
                  <div><a href="">Парящий потолок</a></div>
                  <div><a href="">Натяжные потолки со световыми линиями</a></div>
                  <div><a href="">Резные натяжные потолки</a></div>
                  <div><a href="">Калькулятор для потолка</a></div>
                  <div><a href="">Цветовая палитра для потолка</a></div>
                  <div><a href="">Все о натяжных потолках</a></div>
                  <div><a href="">Цены</a></div>
            </div>
       </div>
       <div class="column">
           <h6 class="yellow mb-30">Звоните сейчас</h6>
                        <div class="f-num">
                             +38 (067) 611 66 12
                         </div>
                         <div class="f-num">
                             +38 (067) 611 66 12
                         </div>
                         <div class="f-num">
                             +38 (067) 611 66 12
                         </div>
                         <h6 class="mb-30 mt-20">Мы в мессенджерах</h6>
                 <div class="top-item mb-30 row">
                   <img class="top-social" src="<?php bloginfo("template_directory"); ?>/img/Telegram_H.png" alt="">
                    <img class="top-social" src="<?php bloginfo("template_directory"); ?>/img/viber_h.png" alt="">
                    <img class="top-social" src="<?php bloginfo("template_directory"); ?>/img/whatsappS-1.png" alt="">
                </div>
                 <div class="top-item row">
                  <div>
                  <i class="fa fa-globe" aria-hidden="true"></i>
                  </div>
                  <div class="lang">
                    <img src="<?php bloginfo("template_directory"); ?> /img/ru.png" alt="">
                    <div>Рус</div>
                  </div>
                  <div class="lang">
                  <img src="<?php bloginfo("template_directory"); ?>/img/uk.png" alt="">
                    <div>Укр</div>
           
                  </div>  
       </div>
    </section>
  </footer>
  <script>
   function menuToggle(){
    let toggle = document.querySelector(".toggle");
    let menu = document.querySelector("ul.menu");

    if (menu.classList.contains("active")) {
                menu.classList.remove("active");
                    
            } else {
                menu.classList.add("active");

}
}
  </script>
<?php wp_footer(); ?>
</body>
</html>
