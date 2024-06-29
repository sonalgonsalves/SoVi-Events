<?php
$page='home';
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EventSpace</title>

        <!-- Google font links-->
        <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap"
      rel="stylesheet"
    />


    <link rel="stylesheet" href="style.css">
  
</head>
  <body>
    <?php include('nav.php'); ?>
    <section class="content">
      <img src="main.png" class="main-image" alt="Event Space" />
      <div class="content1 hidden">
        <h1>AN EVENT PLANNING COMPANY SERVING THE <br> MIDWEST & BEYOND!</h1>
        <p>Nonprofit Fundraisers - Conferences - Annual Celebrations</p>
      </div>
    </section>

      <div class="grid-container" >
    <div class="grid-item top-left">
      <h2>Planning</h2>
      <p>With over a decade of experience, leave the spreadsheets,
        <br>budget management, vendor outreach, mobile bidding <br>
        software, and onsite event management to us. </p>
    </div>
    <div class="grid-item top-right">
      <h2>Design</h2>
      <p>From event storyboarding to marketing, our team will
        design<br> your dream event from the ground up.</p>
    </div>
    <div class="grid-item bottom-left">
      <h2>Production</h2>
      <p>Stage management is our forte. Working with our preferred <br>
        production partners, we will ensure that every light, sound,<br>
        and moment is perfectly on cue! Did we mention that <br>
        scripting is also in our scope? </p>
    </div>
    <div class="grid-item bottom-right">
      <h2>Cultivation</h2>
      <p>You bring the contacts, and we will bring the solicitation <br>
        and fulfillment management! Not only that, but we will oversee<br>
        the event board, leadership, and committee communications <br>
        to ensure that we stay on track for a successful event.  </p>
    </div>
    <a href="services.php" class="learn-more-button">Learn More About Our Services</a>
  </div>

<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

    <script>
      const content1 = document.querySelector('.content1');
      const observer = new IntersectionObserver(
        (entries) => {
          entries.forEach((entry) => {
            if (entry.isIntersecting) {
              content1.classList.add('visible');  // Add 'visible' to trigger the animation
              observer.disconnect();  // Stop observing after it's visible
            }
          });
        },
        { threshold: 0.1 }  // Trigger when 10% of the content is visible
      );

      // Start observing the content1 element
      observer.observe(content1);
    </script>
        <?php include('footer.php'); ?>
  </body>
</html>
