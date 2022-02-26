<!-- Include different pages from different title Start -->


<html>
    <head>
        <title> 
            <?php 
            //Assigning the value of session variable to the $title variable
            $title = $_SESSION["page_title"]; 
            echo $title
            ?> 
        </title>
        <meta charset="UTF-8">
        <meta content="IE=edge" http-equiv="X-UA-Compatible">
        <meta content="width=device-width,initial-scale=1" name="viewport">
        <meta content="description" name="description">
        <meta name="google" content="notranslate" />
        <meta content="Mashup templates have been developped by Orson.io team" name="author">

        <!-- Disable tap highlight on IE -->
        <meta name="msapplication-tap-highlight" content="no">
  
        <link href="./assets/apple-touch-icon.png" rel="apple-touch-icon">
        <link href="./assets/favicon.ico" rel="icon">
        <link href="./assets/css/main.a3f694c0.css" rel="stylesheet">
    </head>
    <!-- Start Body Tag -->
    <body>
        <!-- header start -->
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
                <img src="./assets/images/mashuptemplate.svg" class="navbar-logo-img" alt="">
                </a>
            </div>

            <div class="collapse navbar-collapse" id="navbar-collapse-uarr">
                <ul class="nav navbar-nav navbar-right">
                <li><a href="./index.php" title=""
                <?php 
                   // Set class="active" for Home Page navigation
                   if ($_SESSION["page_title"] == "Home Page") {
                       echo ' class="active"';
                   }
                ?>
                >Home</a></li>
                <li><a href="./about.php" title=""
                <?php 
                   // Set class="active" for About Page navigation
                   if ($_SESSION["page_title"] == "About Page") {
                       echo ' class="active"';
                   }
                ?>
                > About</a></li>
                <li><a href="./pricing.php" title=""
                <?php 
                   // Set class="active" for Pricing Page navigation
                   if ($_SESSION["page_title"] == "Pricing Page") {
                       echo 'class="active"';
                   }
                ?>
                > Pricing </a></li>
                </ul>
            </div>
            </div>
        </nav>
    </header>



    

