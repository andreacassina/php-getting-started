<html>
	<head>
		<title>Pizzerie di Bergamo</title>
	</head>
	<body>
		<?php
			$citta = 'Bergamo';
			$numero = 10;
			$query = 'pizzeria';
			
			$indirizzo = "https://api.foursquare.com/v2/venues/search?v=20161016&client_id=11XI0DDGN1GS1UWD2CQ0J4JPSI3MIYDX1QVI4ZNR4SOTPBKC&client_secret=CXE2TQI3BBFKVLY5MIG5TSHCDIQOY3ABMT4BMNBQU4IUKY0J&query=pizzeria&limit=10&near=bergamo";
	//		$indirizzo = "https://api.foursquare.com/v2/venues/search?v=20161016&client_id=11XI0DDGN1GS1UWD2CQ0J4JPSI3MIYDX1QVI4ZNR4SOTPBKC&client_secret=CXE2TQI3BBFKVLY5MIG5TSHCDIQOY3ABMT4BMNBQU4IUKY0J&query=$query&lim=$numero&near=$citta";
		
			// Get cURL resource
			$curl = curl_init();
			// Set some options - we are passing in a useragent too here
			curl_setopt_array($curl, array(CURLOPT_RETURNTRANSFER => 1,CURLOPT_URL => $indirizzo));
			// Send the request & save response to $resp
			$json = curl_exec($curl);
			// Close request to clear up some resources
			

			//echo "$resp";
			
			$obj = json_decode($json);
			
			//echo $obj->response->venues[$i]->name;
			for($i=0;$i<$numero;$i++)
			{
				echo $obj->response->venues[$i]->name;
				echo $obj->response->venues[$i]->location->lat;
				echo $obj->response->venues[$i]->location->lng;
			}
		
			curl_close($curl);
		?>
	</body>
</html>
