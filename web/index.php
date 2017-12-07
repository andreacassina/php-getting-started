<html>
	<head>
		<title>Pizzerie di Bergamo</title>
	</head>
	<body>
		<?php
			$citta = 'Bergamo';
			$numero = 10;
			$query = 'pizzeria';
			$client_id = "11XI0DDGN1GS1UWD2CQ0J4JPSI3MIYDX1QVI4ZNR4SOTPBKC";
			$client_secret = "CXE2TQI3BBFKVLY5MIG5TSHCDIQOY3ABMT4BMNBQU4IUKY0J";
			
			$indirizzo = "https://api.foursquare.com/v2/venues/search?client_id=$client_id&client_secret=$client_secret&query=$query&v=20170801";
			
		/*	
			// Get cURL resource
			$curl = curl_init();
			// Set some options - we are passing in a useragent too here
			curl_setopt_array($curl, array(CURLOPT_RETURNTRANSFER => 1,CURLOPT_URL => $indirizzo));
			// Send the request & save response to $resp
			$resp = curl_exec($curl);
			// Close request to clear up some resources
			curl_close($curl);
		*/
		$curl = curl_init();
		curl_setopt($ch, CURLOPT_URL,$indirizzo);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		$resp = curl_exec($curl);
		curl_close($curl);
		
		echo "$resp";
		?>
	</body>
</html>
