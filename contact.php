<?php
$page='contact';

$host="localhost";
		$user="root";
		$password="";
		$database="event";
		//create connection
		$con=mysqli_connect($host,$user,$password,$database);

		//check connection
		if(!$con)
		{
			die("connection failed:" .mysqli_connect_error());
		}
    // else{
    //   echo "WORKINGGGGGGGG";
    // }

?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Event Booking</title>
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

    <link rel="stylesheet" href="style.css" />
  </head>
<body>
<?php include('nav.php'); ?>
<!-- Content -->
<div>
  <br><br>
  <center><h1 >LET’S GET THIS PARTY STARTED.</h1><br>
  <p style="font-size:25px;">For event inquiries, please fill out the form below and one of our team members will get back to you within 48 hours.</p></center>
  <form method="POST" action="#">
    <p>
      Full Name<br>
      <input type="text" placeholder="Full Name" name="fname" required maxlength="50" minlength="2">
    </p>
    <p>
      Contact Number<br>
      <input type="number" placeholder="Contact Number" name="cnumber" required pattern="[0-9]{10}" minlength="10" maxlength="10">
    </p>
    <p>
      Event Date<br>
      <input type="date" placeholder="Date of Event" name="eventdate" required>
    </p>
    <p>
      Event Type<br>
      <select name="eventtype" required>
        <option value="">Select an event type</option>
        <option value="engagement">Engagement</option>
        <option value="wedding">Wedding</option>
        <option value="corporate">Corporate Event</option>
        <option value="birthday">Birthday</option>
        <option value="college">College Event</option>
        <option value="anniversary">Anniversary</option>
        <option value="house">House Party</option>
        <option value="reception">Reception</option>
      </select>
    </p>
	<p>
		Duration of Event (in hours)<br>
		<input type="number" placeholder="Duration of Event" name="duration" required min="1" max="24">
	</p>
    <p>
      Time Available to Contact<br>
      <input type="time" placeholder="Time Available to Contact" name="ctime" required>
    </p>
    <p>
      Estimated Budget<br>
      <input type="number" placeholder="Budget" name="budget" required min="0">
    </p>
	<p>
      Estimated Guest Count<br>
      <input type="number" placeholder="Number of Guests" name="guest" required min="0">
    </p>
    <p>
      Additional Details<br>
      <textarea placeholder="Is there anything else that you would like to tell us about your planning needs or vision for your event?" name="details"></textarea>
    </p>
    <br>
	<div class="button-container">
  <div class="button-wrapper">
    <input type="submit" style="width:50%;" name="book" value="Book">
    <input type="reset" style="width:50%;" value="Reset" class="reset-button">
  </div>
</div>
  </form>
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





								
<?php					 						 
if(isset($_POST['book']))
{
	
		$fname=$_POST['fname'];
		$cnumber=$_POST['cnumber'];
		$eventdate=$_POST['eventdate'];
		$eventtype=$_POST['eventtype'];
    $duration=$_POST['duration'];
		$ctime=$_POST['ctime'];
		$budget=$_POST['budget'];
		$guest=$_POST['guest'];
		$details=$_POST['details'];
		
	$query ="INSERT INTO `contact`(`fname`, `cnumber`, `eventdate`, `eventtype`, `duration`, `ctime`, `budget`, `guest`, `details`) VALUES ('".$fname."','".$cnumber."','".$eventdate."','".$eventtype."','".$duration."','".$ctime."','".$budget."','".$guest."','".$details."')";
						   
	mysqli_query($con, $query);
	echo "<script>
			alert('Booking confirmed! We will contact you within 24-48 hours!! ');
		</script>";
	echo "<script> location.href=''; </script>";
}
	?>
</div>



  <?php include('footer.php'); ?>

</body>
</html>
