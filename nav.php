<!-- Navigation Bar -->

<div class="navbar">
  <a href="about.php" <?php if($page=='about') { ?>class="active"<?php } ?>>About</a>
  <a href="gallery.php" <?php if($page=='gallery') { ?>class="active"<?php } ?>>Gallery</a>
  <a href="services.php" <?php if($page=='services') { ?>class="active"<?php } ?>>Services</a>

  <a href="index.php" id="middle" <?php if($page=='home') { ?>class="active0"<?php } ?>>
  <img src="eventlogo.png" alt="EventSpace" width="100" height="100" style="position:absolute;top:0;">
</a>

  <a href="contact.php" id="right" <?php if($page=='contact') { ?>class="active"<?php } ?>>Book Now</a>
</div>