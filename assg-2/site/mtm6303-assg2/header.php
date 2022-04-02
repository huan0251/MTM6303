<!-- Include different pages from different title Start -->
<!DOCTYPE html>
<html lang="en">

<html>
<head>
  <meta charset="UTF-8">
  <meta content="IE=edge" http-equiv="X-UA-Compatible">
  <meta content="width=device-width,initial-scale=1" name="viewport">
  <meta content="description" name="description">
  <meta name="google" content="notranslate" />
  <meta content="Mashup templates have been developped by Orson.io team" name="author">

  <!-- Disable tap highlight on IE -->
  <meta name="msapplication-tap-highlight" content="no">
  
  <link href="<?php echo get_stylesheet_directory_uri()?>/assets/apple-touch-icon.png" rel="apple-touch-icon" />
  <link href="<?php echo get_stylesheet_directory_uri()?>/assets/favicon.ico" rel="icon" />

 
<!-- change the current page title -->
  <title> <?php the_title() ?> </title>  

</head>
<!-- Body tag start -->
<body>

 <!-- Add your content of header -->
<header>
  <nav class="navbar  navbar-fixed-top navbar-default">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle uarr collapsed" data-toggle="collapse" data-target="#navbar-collapse-uarr">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="./index.html" title="">
          <img src="<?php echo get_stylesheet_directory_uri()?>/assets/images/mashuptemplate.svg" class="navbar-logo-img" alt="">
        </a>
      </div>

      <div class="collapse navbar-collapse" id="navbar-collapse-uarr">
        <ul class="nav navbar-nav navbar-right">
          <!-- <li><a href="page.php" title="" class="active">Home</a></li>
          <li><a href="page.php" title=""> About</a></li>
          <li><a href="./template-contact-us.php" title=""> Contact Us </a></li> -->
          <?php
            $menu_items = mtm6303assg2_getnav();
            foreach ($menu_items as $menu_item){
              ?>
            <li class=" <?php echo ($menu_item["active"])? "active" : "" ?> ">
              <a href="<?php echo $menu_item["url"] ?>"><?php echo $menu_item["title"] ?>
                <?php echo ($menu_item["active"])? '<span class="sr-only">(current)</span>' : "" ?>
                
              </a>
            </li>
            <?php
            }
            ?>
        </ul>
      </div>
    </div>
  </nav>
</header>



    

