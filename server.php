<?php
	$data = json_decode(file_get_contents("php://input"));
	//echo $data->type;
	switch ($data->type) {
		case 'add':
			$mysqli = new mysqli("localhost","top4ek","Top4ek2281337!","shop");
			$mysqli->set_charset("utf8");
			$barcode = $data->barcode;
			$sql = $mysqli->query("SELECT name, price FROM `products` WHERE `barcode` = '$barcode'");
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
			        $body = json_encode($json_array, JSON_UNESCAPED_UNICODE);
					echo $body;
			    }
			}
			break;
		case 'buy':
			
			break;
		default:
			# code...
			break;
	}