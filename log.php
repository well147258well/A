<?php
ob_start();
session_start();
$Link=mysqli_connect("localhost","root","well987654well","well");
if(isset($_POST["name"])){
$name=$_POST["name"];
$pwd=$_POST["pwd"];

$sql="SELECT * FROM exam WHERE name='$name' AND pwd='$pwd'";
$result=mysqli_query($Link, $sql);

$rows=mysqli_num_rows($result);

if($rows){
	echo "Success";
	$_SESSION["check"]="yes";
	$_SESSION["name"]=$name;
	$_SESSION["pwd"]=$pwd;
	
	header('Location:index.php');
}else{
	echo "Failed, Will back to login page after 3 second";
	header('refresh:3; url="reg.php"');
}

}
?>