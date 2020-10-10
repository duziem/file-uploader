<?php
	$connect=mysql_connect('localhost', 'root','');
	$select_db=mysql_select_db('my_database');
	
	if(!$connect && !$select_db){
		die('unable to connect');
	}
//phpcredits();	
//$var.='45/';
//$var.='35';
//echo $var;
//$fh= fopen('new_file.txt','r');
//fwrite($fh,"my names are: \n");
//fwrite($fh,"Nnaemezie \n");
//fwrite($fh,"Francis \n");
//fwrite($fh,"Okeke \n");
//fclose($fh);

/*
$outfile= file_get_contents('new_file.txt',1);
echo "$outfile";
while(!feof($fh)){
	$showtext= fgets($fh);
	echo $showtext;
}
*/
//ini_set("session.auto_start",1);

/*
	$query= "CREATE TABLE IF NOT EXISTS frankenstein(
			`id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
			`username` varchar(30),
			`timeofentry` varchar(255),
			PRIMARY KEY(id)
			)";

	$query_run= mysql_query($query);
	if($query_run){echo 'table create successful';}else{echo 'sorry try again';}
	*/
?>