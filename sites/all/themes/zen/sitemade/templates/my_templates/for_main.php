<!-- For main page -->

<!-- Нас благодарят -->
<?php 
 
  function for_graditude($part)
  {  if ($part==1){
  	echo "<div class='row-fluid grey_banner'>
      <div class='big_blue_label'>
        <p>Вот некоторые из наших покупателей...</p>
      </div>
      <div class='row-fluid'>";
           
    }
     else
    {
    echo "</div>
      </div>
      <hr>";
    }
   } 
  

 
  function for_banner_sales2($ban)
  {  echo "  <div id='use_shadow'>
               <div class='row-fluid' id='big_green_br'>
                 <p id='banner4'>";
     if ($ban==2) {echo "При заказе в интернет-магазине СКИДКА 5%";}
      else  {echo "СКИДКА 5% При заказе в интернет-магазине";}

     echo "</p>
               </div>
             </div>";
  }

  function for_our_news($part)
  { if ($part==1){
  	echo "
   <div class='row-fluid'><br><br></div>
    <div class='row-fluid' id='blag'>
     <p><br>События<br></p>
     <div class='row-fluid'>
         
         <div class='well'>
           <div id='blag_text'>";
    }
    else
    {echo "     
           </div>
         </div>     
      </div>
    </div> ";
    }

  }

  function for_our_works()
  {
    echo "  <div class='row-fluid'>
      <br><p id='banner3'>Наши работы<br></p>  
   </div>
   <div class='row-fluid'>
     <div class='slider4'>
      <div class='slide'><img src='/sites/all/themes/zen/sitemade/images/photo1.png' width='200' height='200'></div>
      <div class='slide'><img src='/sites/all/themes/zen/sitemade/images/photo2.png' width='200' height='200'></div>
      <div class='slide'><img src='/sites/all/themes/zen/sitemade/images/photo3.png' width='200' height='200'></div>
      <div class='slide'><img src='/sites/all/themes/zen/sitemade/images/photo4.png' width='200' height='200'></div>
      <div class='slide'><img src='/sites/all/themes/zen/sitemade/images/photo1.png' width='200' height='200'></div>
      <div class='slide'><img src='/sites/all/themes/zen/sitemade/images/photo2.png' width='200' height='200'></div>
      <div class='slide'><img src='/sites/all/themes/zen/sitemade/images/photo3.png' width='200' height='200'></div>
      <div class='slide'><img src='/sites/all/themes/zen/sitemade/images/photo4.png' width='200' height='200'></div>
     </div>";

  }

  function for_brends()
  {
  	echo "
    <div class='row-fluid'>
     <br><p id='banner3'>Бренды<br><br><br></p>  
   </div>
   <div class='row-fluid'>
     <div class='slider5'>
      <div class='slide'> <img src='/sites/all/themes/zen/sitemade/images/brand_1.png' width='200' height='200'></div>
      <div class='slide'> <img src='/sites/all/themes/zen/sitemade/images/brand_2.png' width='200' height='200'></div>
       <div class='slide'> <img src='/sites/all/themes/zen/sitemade/images/brand_3.png' width='200' height='200'></div>
      <div class='slide'> <img src='/sites/all/themes/zen/sitemade/images/brand_4.png' width='200' height='200'></div>
       <div class='slide'> <img src='/sites/all/themes/zen/sitemade/images/brand_5.png' width='200' height='200'></div>
      <div class='slide'> <img src='/sites/all/themes/zen/sitemade/images/brand_6.png' width='200' height='200'></div>
      <div class='slide'> <img src='/sites/all/themes/zen/sitemade/images/brand_1.png' width='200' height='200'></div>
      <div class='slide'> <img src='/sites/all/themes/zen/sitemade/images/brand_2.png' width='200' height='200'></div>
     </div>";
  }


function front_page_css()
{ echo "
  <style type='text/css'>
     .views-view-grid 
       {width: auto;
       	max-width: 95%;
		/*margin-left: 0%;*/}  
 
     .product-grid-col
      {width: 225px;}
  </style>";
}

function breadcrumb_for_not_main(){
 /* echo "
  <style type='text/css'>
    .breadcrumb 
     {
      margin-left:0px;
     }
  </style>  
  ";*/
  echo "
  <style type='text/css'>
     .views-view-grid 
       {width: auto;
        max-width: 95%;
    margin-left: 5%;}  
 
     .product-grid-col
      {width: 225px;}
  </style>";
}

function product_grid_col_with_filter(){
  echo "
  <style type='text/css'>
   .product-grid-col{
      max-width: 170px;
      width: 170px;
      text-align: center;
      white-space: nowrap;
      overflow: hidden;
      text-overflow: ellipsis;
}

.views-view-grid {
  margin-left: 0px;
}

  </style>  
  ";
}


function alphabet_filter()
{  echo"<h1 class='page__title title' id='page-title'>Бренды</h1>";
   echo "<div class='alphabet'>";
   $all="start_page?name=All#brends";
   $lang="eng";
   if (isset($_GET["lang"])){
          $lang=$_GET["lang"];}
   $eng_link="<a href='start_page?name=All&lang=eng#brends'>A..Z</a>";
   $rus_link="<a href='start_page?name=All&lang=rus#brends'>А..Я</a>";
  /* $numb_link="<a href='start_page?name=All&lang=numb#brends'>123</a>";*/


   echo "<a href=".$all.">Все</a>";
   
   if ($lang=="numb") {
      for ($i=ord('0'); $i<=ord('9'); $i++) 
      { $link="start_page?name=";
        echo "<a href=".$link.chr($i)."#brends>";
        echo chr($i);
        echo "</a>";
      } 
      echo $eng_link;
    }else {
   
   for ($i=ord('A'); $i<=ord('Z'); $i++) 
      { $link="start_page?name=";
        echo "<a href=".$link.chr($i)."#brends>";
        echo chr($i);
        echo "</a>";
      }      
    /* echo $numb_link;*/
   }
  echo "</div>";
   


}

//------------------------- Ёбаный пиздец -----------------
function clear_filters()
{ echo "<style type='text/css'>
              #edit-field-os-tid-wrapper, /*os*/
              #edit-shs-term-node-tid-depth-wrapper, /*Processor*/
              #edit-field-field-razr-disp-tid-wrapper,/*Razr_disp*/
              #edit-field-interface-language-tid-wrapper, /*Language*/
              #edit-field-memory-card-type-tid-wrapper, /*Memory card type*/
              #edit-field-disc-memory-value-wrapper, /*Disc memory value RAM*/
              #edit-field-memory-flash-value-wrapper, /*memory flash value*/ 
              #edit-field-sim-count-value-wrapper, /*sim count value*/ 
              #edit-field-mobile-nets-tid-wrapper, /*Mobile nets*/ 
              #edit-field-data-transmission-tid-wrapper, /*Data transmission*/ 
              #edit-field-display-type-tid-wrapper, /*Display type*/ 
              #edit-field-diagonal-disp-value-wrapper, /*Display diagonal*/ 
              #edit-field-qwerty-value-wrapper, /*Display type*/ 
              #edit-field-photo-camera-value-wrapper, /*Razr camera*/
              #edit-field-accum-value-wrapper, /*Accum value*/
              
              #edit-field-disp-light-value-wrapper, /*Display light*/
              #edit-field-aon-value-wrapper, /*aon*/
              #edit-field-euro-aon-value-wrapper, /*euro aon*/
              #edit-field-speakerphone-value-wrapper, /*Speakerphone*/

              #edit-field-acsessuar-tip-all-tid-wrapper, /*Acsessuar tip*/
              #edit-field-for-brends-tid-wrapper, /*Acsessuars for brends*/

              #edit-field-processor-tid-wrapper, /*Processor for computers*/
              #edit-field-matrix-type-tid-wrapper, /*Matrix type*/
              #edit-field-diagonal-disp-value-1--2-wrapper, /*Display diag for Pads*/
              #edit-field-diagonal-disp-value-2--2-wrapper, /*Display diag for Notebooks*/
              #edit-field-diagonal-disp-value-3--2-wrapper, /*Display diag for Monitors & Monoblocks*/


              #edit-field-kol-vo-yader-value-wrapper, /*Kol-vo yader*/
              #edit-field-video-adapter-type-tid-wrapper, /*Videoadapter type*/
              #edit-field-video-cart-tid-wrapper, /*Video cart*/
              #edit-field-video-adapter-memory-value-wrapper, /*Video adapter memory*/
              #edit-field-disc-memory-value-1--2-wrapper, /*RAM for computers*/
              #edit-field-os-for-pc-tid-wrapper, /*OS for PC*/
              #edit-field-hdd-value-wrapper, /*HDD value*/
              #edit-field-ssd-value-wrapper, /*SSD value*/
              #edit-field-weight-value-wrapper, /*Weight value*/
              #edit-field-form-factor-value-wrapper, /*Form factor*/
              #edit-field-input-interface-tid-wrapper, /*Connect interface*/
              #edit-field-nets-type-tid-wrapper, /*nets type*/
              #edit-field-wifi-802-11-tid-wrapper, /*Wifi 802.11*/
              #edit-field-adsl-value-wrapper, /*ADSL value*/
              #edit-field-sim-value-wrapper, /*Sim value*/
              #edit-field-accum-nal-value-wrapper, /*Accum value*/

              #edit-shs-term-node-tid-depth-1-wrapper, /*Acsessuars for computer*/
              #edit-shs-term-node-tid-depth-2-wrapper, /*Per type*/
              #edit-field-gps-module-tid-wrapper, /*GPS module*/
              #edit-field-glonass-value-wrapper, /*GLONASS*/
              #edit-field-about-road-tid-wrapper, /*Probki*/
              #edit-field-diagonal-disp-value-4--2-wrapper, /*Diagonal of display for navi*/
              #edit-field-count-of-cameras-value-wrapper, /*Count cameras*/
              #edit-field-photorezhim-value-wrapper, /*Photo rezhim*/
              #edit-field-g-sensor-value-wrapper, /*G sencor*/
              #edit-field-gps-value-wrapper, /*GPS value*/
              #edit-field-radar-function-value-wrapper, /*Radar function*/
              #edit-field-inputs-tid-wrapper, /*Inputs for audio*/
              #edit-field-sex-tid-wrapper, /*Sex*/
              #edit-field-material-tid-wrapper /*Material*/

              {
                display:none;
               }
           </style>";

}



function select_filters($arg)
{ if ($arg=="Смартфон") {
     echo "<style type='text/css'>
              #edit-field-os-tid-wrapper, /*os*/
              #edit-shs-term-node-tid-depth-wrapper, /*Processor*/
              #edit-field-field-razr-disp-tid-wrapper,/*Razr_disp*/
              #edit-field-interface-language-tid-wrapper, /*Language*/
              #edit-field-memory-card-type-tid-wrapper, /*Memory card type*/
              #edit-field-disc-memory-value-wrapper, /*Disc memory value*/
              #edit-field-memory-flash-value-wrapper, /*memory flash value*/ 
              #edit-field-sim-count-value-wrapper, /*Sim count value*/ 
              #edit-field-mobile-nets-tid-wrapper, /*Mobile nets*/ 
              #edit-field-data-transmission-tid-wrapper, /*Data transmission*/ 
              #edit-field-display-type-tid-wrapper, /*Display type*/ 
              #edit-field-diagonal-disp-value-wrapper, /*Display diagonal*/ 
              #edit-field-qwerty-value-wrapper, /*Qwerty type*/ 
              #edit-field-photo-camera-value-wrapper, /*Razr camera*/
              #edit-field-accum-value-wrapper, /*Accum value*/
              #edit-field-matrix-type-tid-wrapper /*Matrix type*/
              {
                display:block;
               }
           </style>";
   }
   if ($arg=="Телефон") {
              echo "<style type='text/css'>
              #edit-field-disp-light-value-wrapper, /*Display light*/
              #edit-field-aon-value-wrapper, /*aon*/
              #edit-field-euro-aon-value-wrapper, /*euro aon*/
              #edit-field-speakerphone-value-wrapper /*Speakerphone*/
             
              {
                display:block;
               }
           </style>";

   }
   if ($arg=="Мобильный телефон"){
             echo "<style type='text/css'>
              #edit-field-interface-language-tid-wrapper, /*Language*/
              #edit-field-diagonal-disp-value-wrapper, /*Display diagonal*/ 
              #edit-field-memory-flash-value-wrapper, /*memory flash value*/ 
              #edit-field-sim-count-value-wrapper, /*Sim count value*/ 
              #edit-field-mobile-nets-tid-wrapper, /*Mobile nets*/ 
              #edit-field-photo-camera-value-wrapper, /*Razr camera*/
              #edit-field-qwerty-value-wrapper, /*Qwerty type*/ 
              #edit-field-accum-value-wrapper /*Accum value*/
              {
                display:block;
               }
           </style>";
   }
    if ($arg=="Аксессуары"){
          echo "<style type='text/css'>
              #edit-field-acsessuar-tip-all-tid-wrapper, /*Acsessuar tip*/
              #edit-field-for-brends-tid-wrapper /*Acsessuars for brends*/
              {
                display:block;
               }
           </style>";   

    }
    if ($arg=="Планшеты"){
          echo "<style type='text/css'>
              #edit-field-display-type-tid-wrapper, /*Display type*/ 
              #edit-field-diagonal-disp-value-1--2-wrapper, /*Display diag for Pads*/
              #edit-field-field-razr-disp-tid-wrapper,/*Razr_disp*/
              #edit-shs-term-node-tid-depth-wrapper, /*Processor*/
              #edit-field-disc-memory-value-wrapper, /*Disc memory value*/
              #edit-field-memory-flash-value-wrapper, /*memory flash value*/ 
              #edit-field-mobile-nets-tid-wrapper, /*Mobile nets*/ 
              #edit-field-data-transmission-tid-wrapper, /*Data transmission*/ 
              #edit-field-os-tid-wrapper, /*os*/
              #edit-field-matrix-type-tid-wrapper /*Matrix type*/
              {
                display:block;
               }
           </style>";   

    }
      if ($arg=="Ноутбуки"){
          echo "<style type='text/css'>
              #edit-field-processor-tid-wrapper, /*Processor for computers*/
              #edit-field-matrix-type-tid-wrapper, /*Matrix type*/
              #edit-field-kol-vo-yader-value-wrapper, /*Kol-vo yader*/
              #edit-field-video-adapter-type-tid-wrapper, /*Videoadapter type*/
              #edit-field-video-cart-tid-wrapper, /*Video cart*/
              #edit-field-video-adapter-memory-value-wrapper, /*Video adapter memory*/
              #edit-field-disc-memory-value-1--2-wrapper, /*RAM for computers*/
              #edit-field-diagonal-disp-value-2--2-wrapper, /*Display diag for Notebooks*/
              #edit-field-os-for-pc-tid-wrapper, /*OS for PC*/
              #edit-field-hdd-value-wrapper, /*HDD value*/
              #edit-field-ssd-value-wrapper, /*SSD value*/
              #edit-field-weight-value-wrapper /*Weight value*/
              {
                display:block;
               }
           </style>";   

    }
    if ($arg=="Моноблоки"){
          echo "<style type='text/css'>
              #edit-field-diagonal-disp-value-3--2-wrapper, /*Display diag for Monitors & Monoblocks*/


              #edit-field-processor-tid-wrapper, /*Processor for computers*/
              #edit-field-matrix-type-tid-wrapper, /*Matrix type*/
              #edit-field-kol-vo-yader-value-wrapper, /*Kol-vo yader*/
              #edit-field-video-adapter-type-tid-wrapper, /*Videoadapter type*/
              #edit-field-video-cart-tid-wrapper, /*Video cart*/
              #edit-field-video-adapter-memory-value-wrapper, /*Video adapter memory*/
              #edit-field-disc-memory-value-1--2-wrapper, /*RAM for computers*/
              #edit-field-os-for-pc-tid-wrapper, /*OS for PC*/
              #edit-field-hdd-value-wrapper /*HDD value*/
              {
                display:block;
               }
           </style>";   

    }
     if ($arg=="Системные блоки"){
          echo "<style type='text/css'>
              #edit-field-processor-tid-wrapper, /*Processor for computers*/
              #edit-field-kol-vo-yader-value-wrapper, /*Kol-vo yader*/
              #edit-field-video-adapter-type-tid-wrapper, /*Videoadapter type*/
              #edit-field-video-cart-tid-wrapper, /*Video cart*/
              #edit-field-video-adapter-memory-value-wrapper, /*Video adapter memory*/
              #edit-field-disc-memory-value-1--2-wrapper, /*RAM for computers*/
              #edit-field-os-for-pc-tid-wrapper, /*OS for PC*/
              #edit-field-hdd-value-wrapper, /*HDD value*/
              #edit-field-ssd-value-wrapper /*SSD value*/
              {
                display:block;
               }
           </style>";   

    }
     if ($arg=="Мониторы"){
          echo "<style type='text/css'>
              #edit-field-diagonal-disp-value-3--2-wrapper, /*Display diag for Monitors & Monoblocks*/
              #edit-field-matrix-type-tid-wrapper /*Matrix type*/
              {
                display:block;
               }
           </style>";   

    }
    if ($arg=="Носители информации"){
          echo "<style type='text/css'>
              #edit-field-hdd-value-wrapper, /*HDD value*/
              #edit-field-memory-flash-value-wrapper, /*memory flash value*/ 
              #edit-field-form-factor-value-wrapper, /*Form factor*/
              #edit-field-input-interface-tid-wrapper, /*Connect interface*/
              #edit-field-memory-card-type-tid-wrapper, /*Memory card type*/
              #edit-field-nets-type-tid-wrapper /*nets type*/
              {
                display:block;
               }
           </style>";   

    }
    if ($arg=="Сетевое оборудование"){
          echo "<style type='text/css'>
              #edit-field-nets-type-tid-wrapper, /*nets type*/
              #edit-field-wifi-802-11-tid-wrapper, /*Wifi 802.11*/
              #edit-field-adsl-value-wrapper, /*ADSL value*/
              #edit-field-sim-value-wrapper, /*Sim value*/
              #edit-field-accum-nal-value-wrapper /*Accum value*/
              {
                display:block;
               }
           </style>";   

    }
     if ($arg=="Аксессуары для компьютеров"){
          echo "<style type='text/css'>
              #edit-shs-term-node-tid-depth-1-wrapper /*Acsessuars for computer*/
             {
                display:block;
               }
           </style>";   

    }
    if ($arg=="Периферия"){
          echo "<style type='text/css'>
              #edit-shs-term-node-tid-depth-2-wrapper /*Per type*/
              {
                display:block;
               }
           </style>";   

    }
    if ($arg=="GPS-навигаторы"){
          echo "<style type='text/css'>
             #edit-field-diagonal-disp-value-wrapper, /*Display diagonal*/ 
             #edit-field-field-razr-disp-tid-wrapper,/*Razr_disp*/
             #edit-field-interface-language-tid-wrapper, /*Language*/
             #edit-field-wifi-802-11-tid-wrapper, /*Wifi 802.11*/
             #edit-field-gps-module-tid-wrapper, /*GPS module*/
             #edit-field-glonass-value-wrapper, /*GLONASS*/
             #edit-field-about-road-tid-wrapper, /*Probki*/
             #edit-field-diagonal-disp-value-4--2-wrapper /*Diagonal of display for navi*/ 
              {
                display:block;
               }
           </style>";   

    }
     if ($arg=="Видеорегистраторы"){
          echo "<style type='text/css'>
             #edit-field-diagonal-disp-value-4--2-wrapper, /*Diagonal of display for navi*/ 
             #edit-field-photo-camera-value-wrapper /*Razr camera*/ 
              #edit-field-count-of-cameras-value-wrapper, /*Count cameras*/
              #edit-field-photorezhim-value-wrapper, /*Photo rezhim*/
              #edit-field-g-sensor-value-wrapper, /*G sencor*/
              #edit-field-gps-value-wrapper, /*GPS value*/
              #edit-field-radar-function-value-wrapper /*Radar function*/
              {
                display:block;
               }
           </style>";   

    }
    if ($arg=="Автомагнитолы"){
          echo "<style type='text/css'>
              #edit-field-inputs-tid-wrapper /*Inputs for audio*/
              {
                display:block;
               }
           </style>";   

    }
    if ($arg=="Электронные" || $arg=="Механические" || $arg=="Аксессуары"){
          echo "<style type='text/css'>
              #edit-field-sex-tid-wrapper, /*Sex*/
              #edit-field-material-tid-wrapper /*Material*/
              {
                display:block;
               }
           </style>";   

    }
  
}


//---------------------------------------------------------

  ?>