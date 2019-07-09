<?php
// Connecting To the database
include_once '../include/db_connect.php';


// Inserting new records

if(isset($_POST['submitskill']))
{
	$name=htmlspecialchars($_POST['Skill_Name']);
	$level=htmlspecialchars($_POST['Level']);
	$sql="INSERT INTO skills(Skill_Name,Level,Dates) VALUES('$name','$level', NOW())";
	mysqli_query($connect,$sql);
	
	if($insert && $sql){
		$url="../dashboard.php?request=skills&status=1";
		header('location: ' .$url);
	} else{
		$url= "../dashboard.php?request=skills&status=5";
		header('location: ' .$url);
	}
}


// Updating existing records

if(isset($_POST['updates']))
	{
		$id=$_POST['id'];
		$name=htmlspecialchars($_POST['Skill_Name']);
	    $level=htmlspecialchars($_POST['Level']);
			$sql="UPDATE skills SET Skill_Name='$name',Level='$level' WHERE ID=$id";
			mysqli_query($connect,$sql);
			if($sql){
			$url="../dashboard.php?request=skills&status=1";
			header('location: ' .$url);
		   }else{
		   	$url="../dashboard.php?request=skills&status=5";
			header('location: ' .$url);
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

		$db=mysqli_query($connect, "DELETE FROM skills WHERE ID='$id'");

		if($db){
			$url="../dashboard.php?request=skills&status=1";
			header('location: ' .$url);
		} else{
			$url="../dashboard.php?request=skills&status=6";
			header('location: ' .$url);	
		}
	} else{
		$url="../dashboard.php?request=skills&status=4";
		header('location: ' .$url);
	}
}

if(!empty($_REQUEST['request']) && $_REQUEST['request']=='post'){
	if(!empty($_GET['id'])){
		$id=$_GET['id'];
		$status="Active";

		

		$d=mysqli_query($connect, "UPDATE skills SET Status='$status' WHERE ID=".$id);

		if($d){
			$url="../dashboard.php?request=skills&status=1";
			header('location: ' .$url);
		} else{
			$url="../dashboard.php?request=skills&status=6";
			header('location: ' .$url);	
		}
	} else{
		$url="../dashboard.php?request=skills&status=4";
		header('location: ' .$url);
	}
}

if(!empty($_REQUEST['request']) && $_REQUEST['request']=='unpost'){
	if(!empty($_GET['id'])){
		$id=$_GET['id'];
		$status="Unactive";
		$b=mysqli_query($connect, "UPDATE skills SET Status='$status' WHERE ID=".$id);

		if($b){
			$url="../dashboard.php?request=skills&status=1";
			header('location: ' .$url);
		} else{
			$url="../dashboard.php?request=skills&status=6";
			header('location: ' .$url);	
		}
	} else{
		$url="../dashboard.php?request=skills&status=4";
		header('location: ' .$url);
	}
}


?>