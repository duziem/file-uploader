<?php
/*
	session_start();
	require 'connect.php';
	$query="SELECT `username` FROM `signup_table` WHERE `id`='1'";
	$query_run= mysql_query($query);
	$username= mysql_result($query_run,0,'username');
*/
	$directory='uploads';
	$display=scandir($directory);
	$last_value=end($display);
	echo '<img style="border-radius:100%;width:100px;height:100px" src="'.$directory.'/'.$last_value.'"><br>';
	/*
	foreach($display as $value){
		if($value!="." && $value!=".."){
			echo '<img style="border-radius:100%;width:100px;height:100px" src="'.$directory.'/'.$value.'"><br>';	
		}
		
	}*/
	/*
	$handle=opendir($directory.'/');
	while($file=readdir($handle)){
		if($file!="." && $file!=".."){
			//echo '<a href="'.$directory.'/'.$file.'">'.$file.'</a>';
			echo '<img style="border-radius:100%;width:100px;height:100px" src="'.$directory.'/'.$file.'"><br>';
		}
	}
	*/
	/*
	while($_SESSION['file']=readdir($handle)){
		
			if($_SESSION['file']=='frank.jpg'){
				
				echo '<a href="'.$directory.'/'.$_SESSION['file'].'">'.$_SESSION['file'].'</a><br>';
			
			}
		*/
		/*
		if(in_array($username.'.jpg',$file)){
	
		
		
	
			echo '<a href="'.$directory.'/'.$file.'">'.$file.'<br>';
	
		
	
			
		}
		*/
		
	
	
?>