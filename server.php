<?php
	if(isset($_POST['type'])){
		$mysqli = new mysqli("localhost","top4ek","Top4ek2281337!","shop");
		$mysqli->set_charset("utf8");
		switch ($_POST['type']) {
			case 'add':
				$sql = $mysqli->query("SELECT name, price FROM `products` WHERE `id` = 1");
				if($sql->num_rows > 0) {
				    while($row = $sql->fetch_assoc()) {
				    	$json_array = [
				            "type" => "response",
				            "products" => [
				                [
				                    "name" => $row['name'],
				                    "price" => $row['price']
				                ]
				            ]
				        ]; 
						$body = json_encode($json_array);
						echo $body;
				    	//var_dump(json_decode($body));
				    }
				}
				break;
			case 'buy':
				
				break;
			default:
				# code...
				break;
		}
	}