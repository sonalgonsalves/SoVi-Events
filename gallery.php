<?php
$page='gallery';
?>
<!DOCTYPE html>

<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Gallery</title>
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

    <div class="heading">
    <br><br>
    <h1>GALLERY</h1>

      <br><br>
      <p>
        We pride ourselves by being a small part of our clients’ success in
        reaching their community, making a difference and believing in change.
        <br />
        Check out a few of our recent events!
      </p><br>
    </div>
    <div class="slider" >
      <div class="slide-track">
        <div class="slide"><img src="images/img-1.webp" alt="img-1" height="250px" /></div>
        <div class="slide"><img src="images/img-2.avif" alt="img-1" height="250px" /></div>
        <div class="slide"><img src="images/img-3.jpg" alt="img-1" height="250px" /></div>
        <div class="slide"><img src="images/img-4.jpg" alt="img-1" height="250px" /></div>
        <div class="slide"><img src="images/img-5.webp" alt="img-1" height="250px" /></div>
        <div class="slide"><img src="images/img-6.jpg" alt="img-1" height="250px"/></div>
        <div class="slide"><img src="images/img-7.jpg" alt="img-1" height="250px"/></div>
        <div class="slide"><img src="images/img-8.webp" alt="img-1" height="250px" /></div>
        <div class="slide"><img src="images/img-9.jpg" alt="img-1" height="250px" /></div>
        <div class="slide"><img src="images/img-10.jpg" alt="img-1" height="250px" /></div>
      </div>
    </div>
<br><br>
<br><br>
<br><br>
    <?php include('footer.php'); ?>
  </body>
</html>
