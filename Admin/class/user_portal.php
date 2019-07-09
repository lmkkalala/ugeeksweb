<?php
	session_start();
	include '../include/db_connect.php';

	if(isset($_POST['newUser'])){
		$fname=htmlspecialchars($_POST['fname']);
		$lname=htmlspecialchars($_POST['lname']);
		$email=htmlspecialchars($_POST['email']);
		$password=sha1(htmlspecialchars($_POST['password']));

		$checkExistance=mysqli_query($connect,"SELECT * FROM users WHERE First_Name='$fname' AND Last_Name='$lname' AND Email='$email'");
		if(mysqli_num_rows($checkExistance)>0){
			$url="../portalfeed.php?status=exist";
			header("location: ".$url);
		} else {
			$insert=mysqli_query($connect,"INSERT INTO users(First_Name,Last_Name,Email,Password,Dates) VALUES('$fname','$lname','$email','$password', NOW())");

			if($insert){
				$url="../portalfeed.php?status=success";
				header("location: ".$url);
			} else{
				$url="../portalfeed.php?status=failed";
				header("location: ".$url);
			}
		}
	}

	if(isset($_POST['login'])){
		
		$email=htmlspecialchars($_POST['email']);
		$password=sha1(htmlspecialchars($_POST['password']));

		$query=mysqli_query($connect,"SELECT * FROM users WHERE Email='$email' AND Password='$password'");

		if($query){
			$_SESSION['rememberme']="";
			if(mysqli_num_rows($query)>0){
				$url="../dashboard.php?request=home";
				$row=mysqli_fetch_array($query);
				$_SESSION['uname']=$row['First_Name']." ".$row['Last_Name'];
				$_SESSION['uid']=$row['ID'];

				if(isset($_POST['remember'])){
					$_SESSION['rememberme']=$_POST['remember'];
				} else{
					$_SESSION['rememberme']="forget";
				}

				header("location: ".$url);
			} else{
				$url="../portalfeed.php?status=noAccountFound";
				header("location: ".$url);
			}
		} else{
			$url="../portalfeed.php?status=failed";
			header("location: ".$url);
		}
	}

	if($_REQUEST['request']=="signout"){
		$check_session=$_SESSION['rememberme'];

		if($check_session=="remember"){
			header("location: ../index.php");
		} else{
			session_destroy();
			header("location: ../index.php");
		}
	}
	
?>