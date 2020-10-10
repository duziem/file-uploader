<?php
ob_start();
require 'connect.php';
	$name= @$_FILES['image_file']['name'];
	$tmp_name= @$_FILES['image_file']['tmp_name'];
	
	$extension= preg_match("/(\.jpg||\.jpeg)$/",$name);
	$location= 'uploads/';
	
		if(isset($name)){
		
		if(!empty($name)){
			
		if ($extension){
			$upload= move_uploaded_file($tmp_name,$location.$name);
			header('location:read_dir.php');
		}
		}else{echo'select a file';}	
		}
		
		//if(isset($image_name)){echo '<img style="border-radius:100%" src="thumbnail.php?image='.$image_name.'"';}
		
					/*
			echo 'your file has been uploaded:<br>';
			$_SESSION['image_name']=$name;
			$image_name=$_SESSION['image_name'];
			
			$query = "UPDATE `images` SET `image` = '$name' WHERE `id`= 2";
			$query_run= mysql_query($query);
			
			$query= "SELECT `image` FROM `images` WHERE `image`='$name'";
			$query_run= mysql_query($query);
			$query_result= mysql_result($query_run,0,'image');
			$image= $location.$query_result;
			*/
/*
	ob_start();
	require 'connect.php';
	$name= @$_FILES['image_file']['name'];
	$tmp_name= @$_FILES['image_file']['tmp_name'];
	//$type= $_FILES['file']['type'];
	//$size= $_FILES['file']['size'];
	
	//$extension= substr($name,strpos($name,'.')+1);
	$extension= preg_match("/(\.jpg||\.jpeg)$/",$name);
	$location= 'uploads/';
	
	if(isset($name)){
		
		if(!empty($name)){
			
		if ($extension){
		if($upload= move_uploaded_file($tmp_name,$location.$name)){
			/*$query="INSERT INTO `images` VALUES('','$name')";
			 mysql_query($query);
			
			header('location:read_dir.php');*/
			/*
		echo 'your file has been uploaded:<br>';	
		$directory='uploads/';
		$image= $directory.$name;
		
		echo '<a href="'.$image.'"><img style="border-radius:100%" src="thumbnail.php?image='.$image.'"</a>';
		//echo '<div style="border-radius:100%"><a href="'.$image.'" download><img src="thumbnail.php?image='.$image.'</a></div>';
		}
		}
		}else{echo'select a file';}
			
		}

/*	$tmp_name= @$_FILES['image_file']['tmp_name'];

	$query="SELECT `username` FROM `signup_table` WHERE `id`='1'";
	$query_run= mysql_query($query);
	$username= mysql_result($query_run,0,'username');
	$location= 'uploads/';
	$extension='jpg';
	if(move_uploaded_file($tmp_name,$location.$username.'.'.$extension)){
		echo 'uploaded';
	}
*/
?>
<br><br>
<form action="upload.php" method="POST" enctype="multipart/form-data">
	<input name="image_file" type="file" placeholder="select_your_avatar"></input><br><br>
	<input value="submit" type="submit"></input>
</form>