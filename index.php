 <?php 
include 'data.php';
include 'components.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>About Us - Skillbridge</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>

  <main class="about-page"> 
    <?php 
      renderAboutIntro($aboutIntro);
      renderAchievements($achievements);
      renderGoals($goals);
      renderCTA($cta);
    ?>
  </main>

</body>
</html>