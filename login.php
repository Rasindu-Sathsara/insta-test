<?php
if(isset($_POST['insert'])){
	$name=$_POST['text_username'];
	$pass=$_POST['text_password'];
	$filepath = 'data.txt';
	$data = "$name,$pass\n";
	$file_handle = fopen($filepath,'a');
	fwrite($file_handle,$data);
	fclose($file_handle)
}

?>