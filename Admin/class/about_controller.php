<?php
include'../include/db_connect.php';
if(isset($_POST['submitAbout']))
{
	$picture=$_FILES['picture']['name'];
	$tmp_picture=$_FILES['picture']['tmp_name'];
	$target='../images/'.basename($picture);
	$scontent=$_POST['second_content'];
	$stitle=$_POST['second_title'];
	$focontent=$_POST['forth_content'];
	$ftitle=$_POST['first_title'];
	$fcontent=$_POST['first_content'];
	$ttitle=$_POST['third_title'];
	$tcontent=$_POST['third_content'];
	$insert=move_uploaded_file($tmp_picture,$target);
      $sql="INSERT INTO about(Picture,S_Content,S_Title,Fo_Content,F_Title,F_Content,T_Title,T_Content,Dates) VALUES('$target','$scontent','$stitle','$focontent','$ftitle','$fcontent','$ttitle','$tcontent',NOW())";
	$query=mysqli_query($connect,$sql);
	if($insert && $query){
		$url='../dashboard.php?request=about&status=1';
		header('location: '.$url);
	}
	else
	{
		$url='../dashboard.php?request=about&status=5';
		header('location: '.$url);	
	}
	

}

if(isset($_POST['updateAbout']))
{
	$id=$_POST['id'];
	$picture=$_FILES['picture']['name'];
	$tmp_picture=$_FILES['picture']['tmp_name'];
	$target='../images/'.basename($picture);
	$scontent=$_POST['second_content'];
	$stitle=$_POST['second_title'];
	$focontent=$_POST['forth_content'];
	$ftitle=$_POST['first_title'];
	$fcontent=$_POST['first_content'];
	$ttitle=$_POST['third_title'];
	$tcontent=$_POST['third_content'];
	
		if(!empty($picture)){
			$insert=move_uploaded_file($tmp_picture,$target);
			$sql="UPDATE about SET Picture='$target',S_Content='$scontent',S_Title='$stitle',Fo_Content='$focontent',F_Title='$ftitle',F_Content='$fcontent',T_Title='$ttitle',T_Content='$tcontent' WHERE ID=$id";
	  $query=mysqli_query($connect,$sql);
	if($insert && $query){
		$url='../dashboard.php?request=about&status=1';
		header('location: '.$url);
	}
	else
	{
		$url='../dashboard.php?request=about&status=5';
		header('location: '.$url);	
	}
}else if(empty($picture)){
	$sql="UPDATE about SET S_Content='$scontent',S_Title='$stitle',Fo_Content='$focontent',F_Title='$ftitle',F_Content='$fcontent',T_Title='$ttitle',T_Content='$tcontent' WHERE ID=$id";
	  $query=mysqli_query($connect,$sql);
	if($query){
		$url='../dashboard.php?request=about&status=1';
		header('location: '.$url);
	}
	else
	{
		$url='../dashboard.php?request=about&status=5';
		header('location: '.$url);	
	}
}
}

if(!empty($_REQUEST['request']) && $_REQUEST['request']=='delete'){
	if(!empty($_GET['id'])){
		$id=$_GET['id'];

		$db=mysqli_query($connect, "DELETE FROM about WHERE ID='$id'");

		if($db){
			$url="../dashboard.php?request=about&status=1";
			header('location: ' .$url);
		} else{
			$url="../dashboard.php?request=about&status=6";
			header('location: ' .$url);	
		}
	} else{
		$url="../dashboard.php?request=about&status=4";
		header('location: ' .$url);
	}
}

if(!empty($_REQUEST['request']) && $_REQUEST['request']=='post'){
	if(!empty($_GET['id'])){
		$id=$_GET['id'];
		$status="Active";

		

		$d=mysqli_query($connect, "UPDATE about SET Status='$status' WHERE ID=".$id);

		if($d){
			$url="../dashboard.php?request=about&status=1";
			header('location: ' .$url);
		} else{
			$url="../dashboard.php?request=about&status=6";
			header('location: ' .$url);	
		}
	} else{
		$url="../dashboard.php?request=about&status=4";
		header('location: ' .$url);
	}
}

if(!empty($_REQUEST['request']) && $_REQUEST['request']=='unpost'){
	if(!empty($_GET['id'])){
		$id=$_GET['id'];
		$status="Unactive";
		$b=mysqli_query($connect, "UPDATE about SET Status='$status' WHERE ID=".$id);

		if($b){
			$url="../dashboard.php?request=about&status=1";
			header('location: ' .$url);
		} else{
			$url="../dashboard.php?request=about&status=6";
			header('location: ' .$url);	
		}
	} else{
		$url="../dashboard.php?request=about&status=4";
		header('location: ' .$url);
	}
}
?>