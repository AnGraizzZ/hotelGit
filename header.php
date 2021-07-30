<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Bright Hotel - Free Bootstrap 4 Template by Colorlib</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    

    <?php wp_head(  );?>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
      <a class="navbar-brand" href="<?=get_home_url()?>"><?=get_theme_mod( 'bg_name');?></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="oi oi-menu"></span> Меню
      </button>

      <div class="collapse navbar-collapse" id="ftco-nav">
      <ul class="navbar-nav ml-auto">
            <?php 

      if( $menu_items = wp_get_nav_menu_items('Меню в шапке') ) {
        $menu_list = '';
            global $wp;
            $my_url = home_url( $wp->request ).'/';
          foreach ( (array) $menu_items as $key => $row  ) {
              if($my_url==$row->url)
              {
                echo '<li class="nav-item active"><a href="'.$row->url.'" class="nav-link">'.$row->title.'</a></li>';
              }else
              {
                echo '<li class="nav-item "><a href="'.$row->url.'" class="nav-link">'.$row->title.'</a></li>';
              }
          }
        }
                ?>
         <!-- <li class="nav-item"><a href="rooms.html" class="nav-link">Rooms</a></li>
          <li class="nav-item"><a href="services.html" class="nav-link">Services</a></li>
          <li class="nav-item"><a href="about.html" class="nav-link">About Us</a></li>
          <li class="nav-item"><a href="blog.html" class="nav-link">Blog</a></li>
          <li class="nav-item"><a href="contact.html" class="nav-link">Contact</a></li>-->
        </ul>

        
      </div>
    </div>
  </nav>
  <!-- END nav -->

  <div class="block-31" style="position: relative;">
    <div class="owl-carousel loop-block-31 ">
      <div class="block-30 item" style="background-image: url('<?=get_theme_mod( 'bg_img_1');?>');" data-stellar-background-ratio="0.5">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-md-10">
              <span class="subheading-sm"><?=get_theme_mod('bg_name_dop');?></span>
              <h2 class="heading"><?=get_theme_mod( 'bg_text_1');?></h2>
              <p><a href="<?=get_theme_mod( 'bg_button_link_1');?>" class="btn py-4 px-5 btn-primary"><?=get_theme_mod( 'bg_button_name_1');?></a></p>
            </div>
          </div>
        </div>
      </div>
      <div class="block-30 item" style="background-image: url('<?=get_theme_mod( 'bg_img_2');?>');" data-stellar-background-ratio="0.5">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-md-10">
              <span class="subheading-sm"><?=get_theme_mod('bg_name_dop');?></span>
              <h2 class="heading"><?=get_theme_mod( 'bg_text_2');?></h2>
              <p><a href="<?=get_theme_mod( 'bg_button_link_2');?>" class="btn py-4 px-5 btn-primary"><?=get_theme_mod( 'bg_button_name_2');?></a></p>
            </div>
          </div>
        </div>
      </div>
      <div class="block-30 item" style="background-image: url('<?=get_theme_mod( 'bg_img_3');?>');" data-stellar-background-ratio="0.5">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-md-10">
              <span class="subheading-sm"><?=get_theme_mod('bg_name_dop');?></span>
              <h2 class="heading"><?=get_theme_mod( 'bg_text_3');?></h2>
              <p><a href="<?=get_theme_mod( 'bg_button_link_3');?>" class="btn py-4 px-5 btn-primary"><?=get_theme_mod( 'bg_button_name_3');?></a></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
