<?php
$page='about';
?>
<!DOCTYPE html>

<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>About Us!</title>
    <!-- Google Fonts Link For Icons -->
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@48,400,0,0"
    />

    <!-- Google font links-->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap"
      rel="stylesheet"
    />

    <link rel="stylesheet" href="stylev.css" />
  </head>

  <body>
    <?php include('nav.php'); ?>
    <div class="container" >
      <div class="header">
        <h1>OUR AMAZING TEAM</h1><br>
        <p>
          At our Events, we help manage your big ideas and your smallest
          concerns to ensure you are stress-free and enjoying every moment. For
          more than a decade, we’ve been working with clients to create
          exceptional experiences for their nonprofit fundraiser or social
          gathering. As a boutique company, we’re driven by a childlike
          excitement for what we do and a love of collaboration with our
          clients. It’s our goal to leave you and your guests with an event that
          exceeds expectations and lasts in your memories long after the last
          toast.
        </p>
      </div>
      <div class="sub-container">
        <div class="teams">
          <img src="images/9.jpg" alt="" />
          <div class="name">Cystal Merlin</div>
          <div class="desig">Developer</div>
          <div class="about">Existing!</div>
        </div>

        <div class="teams">
          <img src="images/11.jpg" alt="" />
          <div class="name">Sonal Gonsalves</div>
          <div class="desig">Designer</div>
          <div class="about">Very tuned about nails!</div>
        </div>

        <div class="teams">
          <img src="images/10.webp" alt="" />
          <div class="name">Vivian Dsouza</div>
          <div class="desig">Manager</div>
          <div class="about">What happening....!!</div>
        </div>
      </div>
    </div>

    <?php include('footer.php'); ?>
  </body>
</html>
