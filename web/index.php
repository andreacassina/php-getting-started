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
			
			$curl = curl_init($indirizzo);
			curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
			
			$curl_response = curl_exec($curl);
			if ($curl_response === false) 
			{
				$info = curl_getinfo($curl);
				curl_close($curl);
				die('ERRORE');
			}
			curl_close($curl);
			$decoded = json_decode($curl_response);
			if (isset($decoded->response->status) && $decoded->response->status == 'ERROR') {
				die('error occured: ' . $decoded->response->errormessage);
			}
		?>
	</body>
</html>
