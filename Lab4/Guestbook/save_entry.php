<?php
		$content = array();
		$content["name"] = $_POST["input_name"];
		$content["text"] = $_POST["text"];
		
		$guestbook = json_decode(file_get_contents("textfile.json"), true);
		
		if(!$guestbook)
		{
		$guestbook = array();
		}
		$guestbook[] = $content;
		$json_string = json_encode($guestbook);	
		file_put_contents("textfile.json",  $json_string);
		header("Location: index.php");
	

		
?>