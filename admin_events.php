<?php
session_start();
if (!isset($_SESSION['username'])) {
    header('Location: login.php');
}
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
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin Dashboard - Event Management</title>
    <link rel="stylesheet" href="stylea.css" />
  </head>
  <body>
    <nav class="navbar">
      <div class="logo">SOVI</div>
      <a href="logout.php" class="logout-button">Logout</a>    </nav>
      <aside class="side-menu">
  <ul>
    <li><a href="admin_dashboard.php">Dashboard</a></li>
    <li class="active"><a href="#">Events</a></li>
    <li><a href="#">Settings</a></li>
    <br><br><br><br><br><br><br><br><br><br><br>
    <li><?php echo $_SESSION['username']; ?></li>
  </ul>
</aside>
    <div class="main-content">
      <h1>SOVI Events - Dashboard</h1>
      <table>
        <thead>
          <tr>
            <th>Full Name</th>
            <th>Event Date</th>
            <th>Event Type</th>
            <th>Duration (Hours)</th>
          </tr>
        </thead>
        <tbody>

        <?php
		$sql = "SELECT * from contact";
		$result = mysqli_query($con,$sql);
		$num=mysqlI_num_rows($result);

		if($num > 0)
		{ 
		while($row = mysqli_fetch_array($result))
		{ 
			$name=$row[0];
			$type=$row[2];
			$date=$row[3];
			$hours=$row[4];
		?>
                                    <tr>
                                        <td><?php echo $name; ?></td>
                                        <td><?php echo $type; ?></td>
                                        <td><?php echo $date; ?></td>
                                        <td><?php echo $hours; ?></td>
                                    </tr>
									<?php
		}
		}
									?>

      </tbody>
      </table>
    </div>
  </body>
</html>
