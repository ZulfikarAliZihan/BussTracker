<?php

 header('Content-type : bitmap; charset=utf-8');
 
 if(isset($_POST["encoded_string"])){
 	
	$encoded_string = $_POST["encoded_string"];
	$image_name = $_POST["image_name"];
	
	
	
		
		$connection = mysqli_connect('localhost', 'root', '','sv');
		$query = "INSERT INTO photos(name,path) values('$encoded_string','$image_name');";
		
		$result = mysqli_query($connection, $query) ;
		
		if($result){
			echo "success";
		}else{
			echo "failed";
		}
		
		mysqli_close($connection);
	
 }
?>
