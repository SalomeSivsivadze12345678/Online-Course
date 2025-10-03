
<?php
include 'data.php';
include 'components.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css2?family=Be+Vietnam+Pro:wght@100;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>

 
    
<main>
    <?php render_course_hero_section($course_hero_section); ?>
    <?php render_curriculum_section($course_curriculum); ?>    
</main>


</body>
</html>