<?php

$servername="localhost";
$username="csse";
$password="Pass123";
$dbname="dbstud";

$conn=mysqli_connect($servername,$username,$password,$dbname);

if (!$conn){
die("Connection failed".mysqli_connect_error());
}

$regno=$_POST["txtregno"];
$fn=$_POST["txtfn"];
$ln=$_POST["txtln"];
$gen=$_POST["optgen"];
$dept=$_POST["txtdept"];

$sql="INSERT INTO tblreg(regno,fname,lname,gen,dept) VALUES($regno,'$fn','$ln','$gen','$dept')";

if (mysqli_query($conn,$sql)){
	echo("Record for ".$fn." ".$ln." submitted successfully");
}
else{
	echo("Error: ".mysqli_error($conn));
	}
?>