<?php
include'../include/db_connect.php';
if(isset($_POST['submitService']))
{
	
	$service=htmlspecialchars($_POST['service']);
	$caption=htmlspecialchars($_POST['service_caption']);

      $sql="INSERT INTO services(Service,Caption,Dates) VALUES('$service','$caption',NOW())";
	$query=mysqli_query($connect,$sql);
	if($query){
		$url='../dashboard.php?request=services&status=1';
		header('location: '.$url);
	}
	else
	{
		$url='../dashboard.php?request=services&status=5';
		header('location: '.$url);	
	}
	

}

if(isset($_POST['updateService']))
{
	$id=$_POST['id'];
	$service=htmlspecialchars($_POST['service']);
	$caption=htmlspecialchars($_POST['service_caption']);
	
	
		$sql="UPDATE services SET Service='$service', Caption='$caption' WHERE ID=$id";
	  $query=mysqli_query($connect,$sql);
	if($query){
		$url='../dashboard.php?request=services&status=1';
		header('location: '.$url);
	}
	else
	{
		$url='../dashboard.php?request=services&status=5';
		header('location: '.$url);	
	}
}


if(!empty($_REQUEST['request']) && $_REQUEST['request']=='delete'){
	if(!empty($_GET['id'])){
		$id=$_GET['id'];

		$db=mysqli_query($connect, "DELETE FROM services WHERE ID='$id'");

		if($db){
			$url="../dashboard.php?request=services&status=1";
			header('location: ' .$url);
		} else{
			$url="../dashboard.php?request=services&status=6";
			header('location: ' .$url);	
		}
	} else{
		$url="../dashboard.php?request=services&status=4";
		header('location: ' .$url);
	}
}

if(!empty($_REQUEST['request']) && $_REQUEST['request']=='post'){
	if(!empty($_GET['id'])){
		$id=$_GET['id'];
		$status="Active";

		

		$d=mysqli_query($connect, "UPDATE services SET Status='$status' WHERE ID=".$id);

		if($d){
			$url="../dashboard.php?request=services&status=1";
			header('location: ' .$url);
		} else{
			$url="../dashboard.php?request=services&status=6";
			header('location: ' .$url);	
		}
	} else{
		$url="../dashboard.php?request=services&status=4";
		header('location: ' .$url);
	}
}

if(!empty($_REQUEST['request']) && $_REQUEST['request']=='unpost'){
	if(!empty($_GET['id'])){
		$id=$_GET['id'];
		$status="Unactive";
		$b=mysqli_query($connect, "UPDATE services SET Status='$status' WHERE ID=".$id);

		if($b){
			$url="../dashboard.php?request=services&status=1";
			header('location: ' .$url);
		} else{
			$url="../dashboard.php?request=services&status=6";
			header('location: ' .$url);	
		}
	} else{
		$url="../dashboard.php?request=services&status=4";
		header('location: ' .$url);
	}
}
?>