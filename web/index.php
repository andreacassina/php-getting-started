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
			curl_close($curl);

			//echo "$resp";
			
			$obj = json_decode($json);
			echo "JSON </br></br></br></br>";
			print_r($obj['Result']);
			
			
		?>
	</body>
</html>
