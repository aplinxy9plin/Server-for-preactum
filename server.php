<?php
	if(isset($_POST['type'])){
		$mysqli = new mysqli("localhost","top4ek","Top4ek2281337!","shop");
		$mysqli->set_charset("utf8");
		switch ($_POST['type']) {
			case 'add':
				$sql = "SELECT name FROM products";
				$result = $mysqli->query($sql);

				if ($result->num_rows > 0) {
				    // output data of each row
				    while($row = $result->fetch_assoc()) {
				        echo $row['name'];echo "<br>";
				    }
				} else {
				    echo "0 results";
				}
				//var_dump($sql);
				break;
			case 'buy':
				
				break;
			default:
				# code...
				break;
		}
	}