<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
    <title><?php bloginfo('name'); ?> <?php if ( is_single() ) { ?> &raquo; Blog Archive <?php } ?> <?php wp_title(); ?></title>
  <meta name="description" content="MOP of HEAD オフィシャルサイト。ニュース、ライブインフォメーション、ディスコグラフィー">
  <meta name="keywords" content="MOP of HEAD,CONNECTION, モップ, モップ オブ ヘッド">
  <meta name="viewport" content="width=device-width, initial-scale=0.3,minimum-scale=0.3, maximum-scale=0.5, user-scalable=yes">



<!-- External files -->
<link href="<?php bloginfo('template_directory'); ?>/css/<?php
if (is_front_page()) {
// フロントページだった場合
echo 'home';
} elseif (is_home() || !is_page()) {
// 投稿ページのトップページ、かつ固定ページ以外のページだった場合
echo 'category';
} else {
// 上記以外の場合
echo 'category';
}
?>.css" rel="stylesheet" type="text/css" />

<!-- Favicon, Thumbnail image -->
     <link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/image/favicon.ico">

<style type="text/css">
</style>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/responsiveslides.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/jquery.backstretch.js"></script>

<?php if(!is_front_page()): ?>
  <script>
      $.backstretch("<?php bloginfo('template_directory'); ?>/image/category_bg.jpg", {speed: 500});
  </script>

  <script>
      jQuery(function() {
        $("#slides").responsiveSlides({
          maxwidth: 980,
          fade: 300,
          speed: 500, 
        });
      });
  </script>
<?php endif; ?>


  <script type="text/javascript">
  $(function(){
      $('a[href^=#]').click(function() {
          var speed = 500;
          var href= $(this).attr("href");
          var target = $(href == "#" || href == "" ? 'html' : href);
          var position = target.offset().top;
          $($.browser.safari ? 'body' : 'html').animate({scrollTop:position}, speed, 'swing');
          return false;
      });
  });
  </script>

  <script type="text/javascript">
      $(function() {
      var nav = $('.navsample');
      //表示位置
      var navTop = nav.offset().top+200;
      //ナビゲーションの高さ（シャドウの分だけ足してます）
      var navHeight = nav.height()+10;
      var showFlag = false;
      nav.css('top', -navHeight+'px');
      //ナビゲーションの位置まできたら表示
      $(window).scroll(function () {
        var winTop = $(this).scrollTop();
        if (winTop >= navTop) {
          if (showFlag == false) {
            showFlag = true;
            nav
              .addClass('fixed')
              .stop().animate({'top' : '0px'}, 200);
          }
        } else if (winTop <= navTop) {
          if (showFlag) {
            showFlag = false;
            nav.stop().animate({'top' : -navHeight+'px'}, 200, function(){
              nav.removeClass('fixed');
            });
          }
        }
      });
    });
  </script>




<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
   <a id="top"></a>

<?php if(is_front_page()): ?>


    <div id="page">
      <div style="position:absolute; left:20px; top:10px;">
        <img src="<?php bloginfo('template_directory'); ?>/image/connection.png" alt="">
      </div>
      <div style="position:absolute; right:20px; top:15px;">
        <p style="font-size:120%;">Mop of Head Official Website</p>
      </div>
    <div id="wrapper">

<!-- Header -->   
      <div id="header">
        <div style="margin-left:auto;margin-right:auto;width:980px;">
          <?php if(function_exists("wp_social_bookmarking_light_output_e")){wp_social_bookmarking_light_output_e();}?>
        </div>
        

        <div class="navsample">
          <div id="navbg">
                <?php wp_nav_menu( array('menu_id' => 'nav' ,
                                         'theme_location'  => 'main_navi'
                ,)); ?>
          </div>
          <!-- /#nav -->
        </div>

        <div id="headerlogo"></div>

        
      </div><!-- /#header -->

<?php else: ?>


    <div id="page">
      <div style="position:absolute; left:20px; top:10px;">
        <img src="<?php bloginfo('template_directory'); ?>/image/connection.png" alt="">
      </div>
      <div style="position:absolute; right:20px; top:15px;">
        <p style="font-size:120%;">Mop of Head Official Website</p>
      </div>
    <div id="wrapper">

<!-- Header -->   
      <div id="header">

        <div id="headerlogo"></div>
        
        <div id="navbg">
              <?php wp_nav_menu( array('menu_id' => 'nav' ,
                                       'theme_location'  => 'second_navi'
              ,)); ?>
        </div>
        <!-- /#nav -->

        

        
      </div><!-- /#header -->

<?php endif; ?>
