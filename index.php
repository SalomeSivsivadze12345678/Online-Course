
<?php

include ('components.php');
include ('data.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Be+Vietnam+Pro:wght@400;500;700&display=swap" rel="stylesheet">
</head>
<body>

<header>
    <?php
        hheadera($hheadercourses);
    ?>
    </header>
    <?php
        firstconta($pirveliconta);
        konta2($meoreconta);
        solophoto($maxinjebisfoto);
        benefitstart($benefitinfo);
        benefitcards($benefitcards);
        ourcour($coursesinfo);
        ourcourcards($coursescards);
        ourtesti($testimonialsinfo);
        testitipebi($testimonialsguys);
        pricinginfo($pricinginfo);
        echo '<div class="pricing-wrapper container">';
        showPricing($pricingfree);
        showPricing($pricingpro);
        echo '</div>';
        frequestion($seventhdata);
    ?>
    <footer>
        <?php
            footerstart($footdata);
        ?>
    </footer>
</body>
</html>