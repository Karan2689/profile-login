<?php
$name=$_POST['name'];
$email=$_POST['email'];
$desg=$_POST['desg'];
$tag=$_POST['tag'];
$des=$_POST['des'];
$linkedin=$_POST['linkedin'];
$phone=$_POST['phone'];
$p1_img=$_POST['p1_img'];
$p1_title=$_POST['p1_title'];
$p1_link=$_POST['p1_link'];
$p2_img=$_POST['p2_img'];
$p2_title=$_POST['p2_title'];
$p2_link=$_POST['p2_link'];
$skills=$_POST['skills'];
$area=$_POST['area'];
$resume=$_POST['resume'];
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
$sql = "INSERT INTO profile (name ,	email	, desg ,	tag ,	des ,	linkedin ,	phone ,	p1_img ,	p1_title ,	p1_link ,	p2_img	, p2_title	, p2_link , skills ,	area ,	resume ) VALUES ('$name' ,'$email' ,'$desg' ,'$tag' ,'$des' ,'$linkedin' ,'$phone' ,'$p1_img' ,'$p1_title' ,'$p1_link' ,'$p2_img' ,'$p2_title' ,'$p2_link' ,'$skills' ,'$area' ,'$resume')";
if ($conn->query($sql)) 
{
  echo "Successful";
} 
else 
{
	// echo "Unsuccessful";
	echo "Error saving item into table ". $conn->error;
}
?>