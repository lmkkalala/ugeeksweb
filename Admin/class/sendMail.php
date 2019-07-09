<?php
include'../include/db_connect.php';
 if(isset($_POST['submit']))
 {
 	$name=mysqli_real_escape_string($connect,$_POST['name']);
 	$email=mysqli_real_escape_string($connect,$_POST['email']);
 	$subject=mysqli_real_escape_string($connect,$_POST['subject']);
 	$message=mysqli_real_escape_string($connect,$_POST['message']);

 	$sql=mysqli_query($connect,"INSERT INTO messages(Name,Email,Subject,Message) VALUES('$name','$email','$subject','$message')");
 		if($sql){
 		header("location:../../index.php");
 		}
 }

 if(!empty($_REQUEST['request']) && $_REQUEST['request']=='delete'){
	if(!empty($_GET['id'])){
		$id=$_GET['id'];
		
		echo '<script>
				
		        var bool=window.confirm("Do you really want to delete this record?");

		    if(bool==false){
			    window.location.href="dashboard.php?request=intro&status=0";
		    }
	

		    </script>';

		$db=mysqli_query($connect, "DELETE FROM messages WHERE ID='$id'");

		if($db){
			$url="../dashboard.php?request=message&status=1";
			header('location: ' .$url);
		} else{
			$url="../dashboard.php?request=message&status=6";
			header('location: ' .$url);	
		}
	} else{
		$url="../dashboard.php?request=message&status=4";
		header('location: ' .$url);
	}
}

if(!empty($_REQUEST['request']) && $_REQUEST['request']=='post'){
	if(!empty($_GET['id'])){
		$id=$_GET['id'];
		$status="Active";

		

		$d=mysqli_query($connect, "UPDATE messages SET status='$status' WHERE ID=".$id);

		if($d){
			$url="../dashboard.php?request=home";
			header('location: ' .$url);
		} else{
			$url="../dashboard.php?request=message&status=6";
			header('location: ' .$url);	
		}
	} else{
		$url="../dashboard.php?request=message&status=4";
		header('location: ' .$url);
	}
}

if(!empty($_REQUEST['request']) && $_REQUEST['request']=='unpost'){
	if(!empty($_GET['id'])){
		$id=$_GET['id'];
		$status="Unactive";
		$b=mysqli_query($connect, "UPDATE messages SET status='$status' WHERE ID=".$id);

		if($b){
			$url="../dashboard.php?request=message&status=1";
			header('location: ' .$url);
		} else{
			$url="../dashboard.php?request=message&status=6";
			header('location: ' .$url);	
		}
	} else{
		$url="../dashboard.php?request=message&status=4";
		header('location: ' .$url);
	}
}
?>