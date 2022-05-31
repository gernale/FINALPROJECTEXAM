<?php
session_start();


// Create connection
$conn = new mysqli("localhost", "root", "", "emailsystem");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


$user_fname="";
$user_lname="";
$user_email="";
$user_password="";
$usertype="";




if(isset($_POST["register"])){
	$user_fname=test_input($_POST["user_fname"]);
	$user_lname=test_input($_POST["user_lname"]);
	$user_email=test_input($_POST["user_email"]);
	$user_password=test_input($_POST["user_password"]);
	$usertype=test_input($_POST["usertype"]);

	if($usertype=="loggin"){
		$sql = "SELECT * FROM user WHERE user.user_email= '$user_email'";
		$result = $conn->query($sql);
		if($result->num_rows > 0){
			$_SESSION["errorMsg2"]="This User Email is already taken";
		}
		else{
			unset($_SESSION["errorMsg2"]);
			$sql = "INSERT INTO user (user_fname, user_lname, user_email, user_password) VALUES ('$user_fname', '$user_lname', '$user_email', '$user_password')";
			$result = $conn->query($sql);
			if($result==true){
				$_SESSION["UserEmail"]=$user_email;
				$_SESSION["Usertype"]=1;
				header("location: index.php");
			}

		}
	}
	
}

if(isset($_POST["login"])){
	session_unset();
	$user_email=test_input($_POST["user_email"]);
	$user_password=test_input($_POST["user_password"]);
	$usertype=test_input($_POST["usertype"]);

	if ($usertype=="loggin"){
		$sql = "SELECT * FROM user WHERE user_email = '$user_email' AND user_password = '$user_password'";
		$result = $conn->query($sql);
		if($result->num_rows == 1){
			$_SESSION["UserEmail"]=$user_email;
			$_SESSION["Usertype"]=1;
			unset($_SESSION["errorMsg"]);
			header("location: index.php");
		}
		else{
			$_SESSION["errorMsg"]="username/password is incorrect";
		}
	}
	
}


if(isset($_SESSION["errorMsg"])){
	$errorMsg=$_SESSION["errorMsg"];
	unset($_SESSION["errorMsg"]);
}
else{
	$errorMsg="";
}

if(isset($_SESSION["errorMsg2"])){
	$errorMsg2=$_SESSION["errorMsg2"];
	unset($_SESSION["errorMsg2"]);
}
else{
	$errorMsg2="";
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

//$conn->close();
?>