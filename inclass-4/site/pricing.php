
<?php
    //Require the Session start function
    require_once "includes/session_include.php";
    //Added page title to be stored in the $SESSION variable
    $_SESSION["page_title"] = "Pricing Page";

    //Include the header
    include "includes/header.php";
?>
<?php

/******************************** 
 All PHP variables and 
 Functions are 
 defined in this section
*******************************/

$services = [
    "service_1" => [
        "serviceClassType" => "primary",
        "serviceTitle" => "Personal",
        "servicePrice" => "18",
    ],
    "service_2" => [
        "serviceClassType" => "info",
        "serviceTitle" => "Professional",
        "servicePrice" => "28",
    ],
    "service_3" => [
        "serviceClassType" => "secondary",
        "serviceTitle" => "Business",
        "servicePrice" => "48",
    ],
];

?>

<div class="section-container">
    <div class="container">
        <div class="row section-container-spacer">
            <div class="col-xs-12">
                <div class="text-center">
                    <h1>Pricing</h1>
                </div>
                <div class="col-md-8 col-md-offset-2">
                    <p>Adipiscing vitae proin sagittis nisl rhoncus mattis. Bibendum enim facilisis gravida neque convallis
                        a cras semper auctor. Sit amet risus nullam eget felis eget. Metus dictum at tempor commodo ullamcorper
                        a lacus vestibulum. Sit amet facilisis magna etiam tempor orci eu. Eleifend mi in nulla posuere.
                        Et magnis dis parturient montes nascetur ridiculus mus mauris vitae. 
                    </p>
                </div>
            </div>
        </div>

        <div class="row">
             
            <?php foreach ($services as $service_key => $service_value) { 
                
                $service_items = [];
                switch($service_value['serviceTitle']) {
                    case "Personal":
                        $service_items =  array("Gravida arcu ac tortor dignissim convallis aenean",
                                "Gravida arcu ac tortor dignissim convallis aenean",
                                "Gravida arcu ac tortor dignissim");
                    break;
                    case "Professional":
                        $service_items =  array("Gravida arcu ac tortor dignissim convallis aenean",
                        "Gravida arcu ac tortor dignissim convallis aenean",
                        "Gravida arcu ac tortor dignissim",
                        "Gravida arcu ac tortor dignissim convallis aenean");
                    break;
                    case "Business":
                        $service_items =  array("Gravida arcu ac tortor dignissim convallis aenean",
                        "Gravida arcu ac tortor dignissim convallis aenean",
                        "Gravida arcu ac tortor dignissim",
                        "Gravida arcu ac tortor dignissim convallis aenean",
                        "Gravida arcu ac tortor dignissim");
                    break;
                    default:
                        $service_items =  array("Gravida arcu ac tortor dignissim convallis aenean",
                        "Gravida arcu ac tortor dignissim convallis aenean",
                        "Gravida arcu ac tortor dignissim");
                }    
            ?>
             
            <div class="col-md-4">
                <div class="pricing-card pricing-<?php echo $service_value['serviceClassType'] ?>">
                    <h3><?php echo $service_value['serviceTitle'] ?></h3>
                    <h6 class="price"><?php echo $service_value['servicePrice'] ?> <span>$/MO</span></h6>
                </div>
                <div class="pricing-features">
                    <ul class="features">
                        <?php
                            foreach ($service_items as $item) {
                                echo '<li>' . $item . '</li>';
                            }
                        ?>
                    </ul>

                    <a href="#" class="btn btn-primary" title="">Subscribe</a>
                </div>

            </div>
                                        
            <?php } ?>  
        </div>
    </div>
         
</div>  

<!-- Include the footer -->
<?php
    include "includes/footer.php";
?>