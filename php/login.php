<?php
$uemail=$_GET['email'];
$upasskey=$_GET['pass'];
// echo "$uemail";
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
$sql = "SELECT * FROM user_table where email = '$uemail'";
if ($result = $conn->query($sql))
{
	$row = $result->fetch_assoc();
	$dbp = $row['passkey'];
	if($dbp == $upasskey)
	{
		echo "Successful";
	}
	else
	{
		echo "password is wrong";
	}
}
else
{
	echo "email is wrong";
}
?>