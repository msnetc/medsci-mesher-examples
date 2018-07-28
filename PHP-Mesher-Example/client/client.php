<?php
                
		$name = getenv("Item");
		$url = "http://hellomesher/api.php?name=".$name;
		
		$client = curl_init($url);
		curl_setopt($client,CURLOPT_RETURNTRANSFER,true);
		$response = curl_exec($client);
		
		$result = json_decode($response);
		
		echo $result->data; 
   ?>
