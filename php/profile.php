<?php
$uemail=$_GET['email'];
$servername="sql544.main-hosting.eu";
$username="u745359346_guvi_user";
$password="Guvi.Karan@2023";
$conn=mysqli_connect($servername,$username,$password);
if(!$conn)
{
  die("Connection failed:".mysqli_connect_error());
}
//   echo "connected successfully";
//   echo "<br>";
$dbname="u745359346_GUVI_user";
mysqli_select_db($conn,$dbname);
$sql = "SELECT * FROM profile where email='$uemail'";
if ($result = $conn->query($sql))
{
	$row = $result->fetch_assoc();
	$name = $row['name'];
	$email = $row['email'];
	$desg = $row['desg'];
	$tag = $row['tag'];
	$des = $row['des'];
	$linkedin = $row['linkedin'];
	$phone = $row['phone'];
	$p1_img = $row['p1_img'];
	$p1_title = $row['p1_title'];
	$p1_link = $row['p1_link'];
	$p2_img = $row['p2_img'];
	$p2_title = $row['p2_title'];
	$p2_link = $row['p2_link'];
	$skills = $row['skills'];
	$area = $row['area'];
	$resume = $row['resume']; 
  echo "<div id='cover'>
		<img src='assets/cover-section-img.png' class='cover-pic'>
		<h2 class='tagline'>".$tag."</h2>
	</div>
	<div id='profile-bar'>
		<div id='profile-title'>
			<img src='assets/favicon.png' class='profile-pic'>
			<div id='profile-title-head'>
				<h1 class='profile-name'>$name</h1>
				<h3 class='profile-des'>$desg  - <a href='$resume'>View Resume</a></h3>
			</div>
		</div>
		<div id='social-bar'>
			<p><i class='bi bi-phone-vibrate'></i>   $phone</p>
			<a href='mailto:$email'><i class='bi bi-envelope-fill'></i> E-mail</a>
			<a href='$linkedin '><i class='bi bi-linkedin'></i> Linked in</a>
		</div>
	</div>
	<div id='des'>
		<p class='des-p'>$des</p>
		<h4>Some of my Projects</h4>
		<div id='projects'>
			<a class='project-box' href='$p1_link'>
				<img src='$p1_img' class='project-box-img'>
				<h4 class='project-box-h1'>$p1_title</h4>
			</a>
			<a class='project-box' href='$p2_link'>
				<img src='$p2_img' class='project-box-img'>
				<h4 class='project-box-h1'>$p2_title</h4>
			</a>
			<div id='skills'>
				<p>$skills</p>
				<p>$area</p>
			</div>
		</div>
	</div>";
} 
else 
{
	echo "Unsuccessful";
	// echo "Error saving item into table ". $bill_name. " : " . $conn->error;
}
?>