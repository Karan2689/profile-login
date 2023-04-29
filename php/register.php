<?php
$uemail=$_GET['email'];
$upasskey=$_GET['pass'];
$ucpasskey=$_GET['cpass'];
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
if($upasskey==$ucpasskey)
{
	$sql = "INSERT INTO user_table (email, passkey) VALUES ('$uemail' , '$upasskey')";
	if ($conn->query($sql)) 
	{
	  echo "Successful";
	} 
	else 
	{
		echo "Unsuccessful";
		// echo "Error saving item into table ". $bill_name. " : " . $conn->error;
	}
}
else
{
	echo "password doesn't match";
}
?>