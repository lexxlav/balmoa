<?php
/**
 * @file
 * Returns the HTML for a single Drupal page.
 *
 * Complete documentation for this file is available online.
 * @see https://drupal.org/node/1728148   
 */






$current_dir = "http://sport_shop.loc/sites/all/themes/zen/sitemade/"; //for <base>
include ("my_templates/for_main.php");
?>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php if(arg(0)=="node") {front_page_css();}?>
<a id="front"></a>
<div class="container">
<div id="page">
  <header class="header" id="header" role="banner">
   <!-- header -->
    <div class="row-fluid" id="first_row"> 
         <div class="span6"> 
           <!-- logo-->
           <div class="row-fluid logo_banner">
              <?php if ($logo): ?>
                 <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" class="header__logo" id="logo"><img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" class="header__logo-image" /></a>
              <?php endif; ?>
           </div>
           <!-- search form -->
           
           <div class="row-fluid search_form">   
             <?php print render($page['search_block']); ?> 
             <!-- <form class="form-search" id="search">
                  <input class="input-large" type="text" class="input-medium search-query">
                  <button type="submit" class="btn btn-success">Поиск</button>
               </form>     -->           
           </div>
           <!-- -->
         </div>  
         <div class="span3">
           <div class="row-fluid mail_link">
              mail@mail
           </div>
           <div class="row-fluid phone_banner">
              <p>8 (8352) 800-855</p>
           </div>
           <div class="row-fluid">
            <div class="soc_net_banner"> 
             <!-- Для соц сетей -->
              <a href="http://vk.com">
	             <div class="vk_label">
	             </div>
	          </a>
	          <a href="http://facebook.com">   
	             <div class="facebook_label">
	             </div>
	          </a>
	          <a href="http://twitter.com">   
	             <div class="twitter_label">
	             </div>
	          </a>
	          <a href="http://youtube.com">   
	             <div class="youtube_label">
	             </div>
	          </a>   
            </div> 
           </div>
           <div class="row-fluid hello_label">
             <p>Добро пожаловать, <?php if (!empty($user) && $user->uid != 0) {print render ($user->name);} else {echo "Гость";} ?>!</p>
           </div>
         </div>
         <div class="span3">
            <div class="row-fluid enter_links">
              <p><?php if (!empty($user) && $user->uid != 0) {echo "<a href='/user'>Настройка учетной записи</a><a href='/user/logout'> Выход </a>";} 
                else {echo "<a href='/user'>Вход|Регистрация</a>";} ?>
                <?php print render($page['autorization']); ?></p> 
            </div> 
           <div class="cart_link"> 
            <a href="/cart">
            <div class="row-fluid cart_banner">
             <div class="cart_text"> <?php
                // Вывод упрощенной корзины. template.php
                print simple_commerce_cart();
                ?>
             </div>
            </div>
            </a>
           </div>
        </div>

  <!-- header end-->

      
  </header>
  <a name='brends';></a>
  <div class="row-fluid orange_line"></div> 
  <div id="main">
   <div class="content-wrapper">
    <div id="content" class="column" role="main">
         



    
      <?php  if ($page['highlighted']){print render($page['highlighted']);}
               else {print render($page['highlighted2']);}
      ?>
    
      <a id="main-content"></a>
      <?php
            if ($title=='Без имени') {$title = "Товары";drupal_set_title("Товары");};
            if(arg(0)=="cart" || arg(0)=="checkout" || arg(0)=="search" || arg(0)=="user"){
            breadcrumb_for_not_main();
            print $breadcrumb;  
            if (arg(0)=='taxonomy' && arg(1)=='term' && arg(2)=='all') {
             echo "товары";
             $title = "Товары";
             drupal_set_title("Товары");}



            print render($title_prefix);
            if ($title){
                   if (arg(0)=="node") {echo "<h1 class='page__title title blue_title'>";} 
                   	else
                      {echo "<h1 class='page__title title' id='page-title'>";}
                   if ($title=='Без имени') {$title = "Товары";drupal_set_title("Товары");};
                   print $title;
                   echo "</h1>";}
             print render($title_suffix); 
             print $messages; 
             print render($tabs); 
             print render($page['help']);
             if ($action_links){ 
                    echo "<ul class='action-links'>";
                    print render($action_links);
                    echo "</ul>";}
               
          /*   if(!$page['group_block'] && $page['filter_block']){print render($page['big_filter_block']);}*/
             print render($page['content']); 
             print $feed_icons;
            
             if (arg(0)=='node'){
              // echo "<div class='read_more_link'><a href='/taxonomy/term/all?field_field_product_manufactured_tid=All&field_recommended_value[1]=1'> Узнать больше </a></div>"; //ССылка на распродажу
             }       

           }
      ?>  
         
    </div>
     <?php
      // Render the sidebars to see if there's anything in them.
      $sidebar_first  = render($page['sidebar_first']);
      $sidebar_second = render($page['sidebar_second']);
    ?>
    
    <?php if ($sidebar_first || $sidebar_second): ?>
    
      <aside class="sidebars">
        <?php print $sidebar_first; ?>
        <?php print $sidebar_second; ?>
      </aside>
    
    <?php endif; ?>

     
  </div>


<!-- Убран навбар ! --> 
<!-- -->
</div>
 <!-- Бренды -->
   <!-- <div class="row-fluid">
      <p id='banner3'>Бренды</p>
    </div>-->
    <?php if(drupal_is_front_page()){alphabet_filter();} ?>
    <?php if($page['brends_list']){print render($page['brends_list']);} ?>
 <!--Про скидку-->     
   <?php if($page['reclam_banner']){print render($page['reclam_banner']);} ?>  
  <!-- Содержимое если мы на главной странице-->
       <?php if(/*drupal_is_front_page() || (arg(0)!="node" && arg(0)!="cart" && arg(0)!="checkout" && arg(0)!="search" && arg(0)!="user")*/arg(0)!="cart" && arg(0)!="checkout" && arg(0)!="search" && arg(0)!="user"){
           
            print $breadcrumb;
           
            print render($title_prefix);
            if ($title){
                   echo "<h1 class='page__title title' id='page-title'>";
                   print $title;
                   echo "</h1>";}
             print render($title_suffix); 
             print $messages; 
             print render($tabs); 
             print render($page['help']);
             if ($action_links){ 
                    echo "<ul class='action-links'>";
                    print render($action_links);
                    echo "</ul>";}
            //Фильтр или группы товаров 
             if(!drupal_is_front_page() && arg(0)=="taxonomy" && $page['group_block'])
             	{print render($page['group_block']);
                 /*print render($page['content']);*/ } 
              else 
             {     
              if(!drupal_is_front_page() && arg(0)=="taxonomy" && $page['filter_block'])
              	{product_grid_col_with_filter();
              	 echo "<div class='row-fluid'>
                         <div class='span3'>
                           ";
                 /*-----------------Настройка вывода фильтров-----------------------*/          
              	 clear_filters();
              	 select_filters($title);
              	 //------------------------------------------
              	 print render($page['filter_block']);
              	 echo "  </div>
              	         <div class='span9'>";
                 print render($page['content']); 
                 echo "  </div>
                        </div>";}
             }
             
             if (drupal_is_front_page() || arg(0)!="taxonomy"){ print render($page['content']);}
           
             print $feed_icons;
        
            // echo "<div class='read_more_link'><a href='/taxonomy/term/all?field_field_product_manufactured_tid=All&field_sale_value[1]=1'> Узнать больше </a></div>"; //ССылка на распродажу
           }
       ?>      
 <!-- -->
  <!--Про скидку-->     
   <?php if($page['reclam_banner2']){print render($page['reclam_banner2']);} ?> 
<!-- только для нод!!!!!!!!!!!!!!!! -->
 <a id="for_scrool"></a>
 <?php  print render($page['content_full_width']); ?>

 <?php if(arg(0)=="node" && $page['about_product']) {
      echo "<ul class='tabset_tabs'>
      <li><a href='#tab1' class='active'>Описание</a></li>
      <li><a href='#tab2'>Технические характеристики</a></li>
      </ul>
      <div id='tab1' class='tabset_content'>
        <h2 class='tabset_label'>Описание</h2>";
          print render($page['about_product']); 
           echo "</div>
        <div id='tab2' class='tabset_content'>
        <h2 class='tabset_label'>Технические характеристики</h2>";
          print render($page['character_product']); 
           echo "</div>";
} ?> 


<!-- -->  
<!-- Скидки-->
   <?php print render($page['content_second']); ?> 
<!-- Про скидки 2 -->
   <?php if($page['reclam_banner3']){print render($page['reclam_banner3']);} ?>    
<!-- Популярное-->
   <?php print render($page['content_second_second']); ?>  
<!-- Нас благодарят -->
   <?php if ($page['content_graditude']) { for_graditude(1); print render($page['content_graditude']);for_graditude(2); } ?>
<!-- Обзоры -->
    <?php if($page['reviews']){print render($page['reviews']);} ?> 
<!-- -->
   <?php print render($page['content_third']);
       /*if (drupal_is_front_page()){ 
         echo "<div class='read_more_link'><a href='/taxonomy/term/all'> Узнать больше </a></div>"; //ССылка на распродажу
        } 
          */  ?> 
<!-- -->
   
<!-- Про скидки 2 -->
   <!--?php if($page['reclam_banner4']){print render($page['reclam_banner4']);} ?> --> 
<!-- Наши работы -->
   <!--?php if (drupal_is_front_page()){for_our_works();}?-->
<!-- События -->
   <!--?php if($page['content_news']){for_our_news(1);print render($page['content_news']);for_our_news(2);} ?-->   
<!-- Бренды -->
   <!--?php if (drupal_is_front_page()){for_brends();}?-->   
   <div class="row-fluid grey_banner">
    <hr>
   <hr><hr>
     <div class="text_on_grey_banner">
    <?php print render($page['footer']); ?>
   </div>
   </div>     
   <hr>
<!-- -->
</div>
  
<!-- end of page -->
 <div class="row-fluid margin_left_pl help_block">
  <div class="span3">
    <div class="little_hand"><a href="/about_company">О компании</a></div>
    <p><a href="/about_us">О нас</a></p>
    <p><a href="/for_partners">Партнерам</a></p>
    <p><a href="/for_clients">Клиентам</a></p>
    <p><a href="/comments">Отзывы</a></p>
  </div>
  <div class="span3">
    <div class="little_hand">Помощь</div>
    <p><a href="/how_do_order">Заказ</a></p>
    <p><a href="/payment">Оплата</a></p>
    <p><a href="/delivery">Доставка</a></p>
    <p><a href="/questions">Вопросы</a></p>
    <p><a href="/consumer_protection">Защита покупателя</a></p>
  </div>
  <div class="span3">
    <div class="little_hand">Способы оплаты</div>
    <p><a href="/cash">Наличный расчет</a></p>
    <p><a href="/bank_card">Банковская карта</a></p>
    <p><a href="/web_money">Электронные деньги</a></p>
  </div>
  <div class="span3 soc_net_banner_list">
    <div class="little_hand">Будьте на связи</div>
          <div class="span2">
		    <div class="soc_net_banner_little"> 
		            
		    </div>
		  </div>
		  <div class="span7">  
		    <div>
		      <p><a href="http://vk.com">Вконтакте</a></p>
		      <p><a href="http://facebook.com">Facebook</a></p>
		      <p><a href="http://twitter.com">Twitter</a></p>
		      <p><a href="http://youtube.com">YouTube</a></p>
		    </div> 
		  </div>  
  </div>
 </div>
<!-- -->
<div class="row-fluid grey_banner dont_margin_top">
<hr><hr><hr>
  <div class="margin_top_pl">  
    </div>
    <div class="row-fluid">
    <div class="span4">
       <div class="img_logo">
        <img src="/sites/all/themes/zen/sitemade/images/logo.png">
        <p> <div class="text_on_grey_banner without_bottom">Copyright &copy2014 BALMOA.RU</div></p>
       </div> 
    </div>
    <div class="span4"></div>
    <div class="span3">
      <a href="http://sellingsites.pro"><img src="/sites/all/themes/zen/sitemade/images/logo_sellingsites.jpg"></a>
    </div>
   </div>
<a id="scrolling" href=""></a>
</div>


 



