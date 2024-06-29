<?php
$page='services';
?>
<!DOCTYPE html>

<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Services</title>
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
    <div class="about"><center>
    <h1>NO EVENT IS ALIKE</h1><br><br>
      <p>At Chappelow Events, we pride ourselves in being an extension of your organization. 
        Our team of experts service a wide variety of events. Let us help you plan, design, and produce your event. </p>
</center>    
        <div class="main">
        <div class="image">
          <img src="images/birthday.avif" alt="" />
        </div>
        <div class="about-text">
          <h1>BIRTHDAY</h1>
          <p>
            At Chappelow Events, we pride ourselves in being an extension of
            your organization. Our team of experts service a wide variety of
            events. Let us help you plan, design, and produce your event.
          </p>
          <button onclick="window.location.href='contact.php';" type="button">Book</button>
        </div>
      </div>

      <div class="main">
        <div class="image">
          <img src="images/wedding.jpg" alt="" />
        </div>
        <div class="about-text">
          <h1>WEDDING</h1>
          <p>
            At Chappelow Events, we pride ourselves in being an extension of
            your organization. Our team of experts service a wide variety of
            events. Let us help you plan, design, and produce your event.
          </p>
          <button onclick="window.location.href='contact.php';" type="button">Book</button>
        </div>
      </div>

      <div class="main">
        <div class="image">
          <img src="images/conference.jpg" alt="" />
        </div>
        <div class="about-text">
          <h1>CONFERENCE</h1>
          <p>
            At Chappelow Events, we pride ourselves in being an extension of
            your organization. Our team of experts service a wide variety of
            events. Let us help you plan, design, and produce your event.
          </p>
          <button onclick="window.location.href='contact.php';" type="button">Book</button>
        </div>
      </div>

      <div class="main">
        <div class="image">
          <img src="images/anniversary.webp" alt="" />
        </div>
        <div class="about-text">
          <h1>ANNIVERSARY</h1>
          <p>
            At Chappelow Events, we pride ourselves in being an extension of
            your organization. Our team of experts service a wide variety of
            events. Let us help you plan, design, and produce your event.
          </p>
          <button onclick="window.location.href='contact.php';" type="button">Book</button>
        </div>
      </div>


    </div>

    

    <?php include('footer.php');?>
  </body>
</html>
