<html>
	<head>
		<title>Pizzerie di Bergamo</title>
		<style>
		#customers {
		    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
		    border-collapse: collapse;
		    width: 100%;
		}

		#customers td, #customers th {
		    border: 1px solid #ddd;
		    padding: 8px;
		}

		#customers tr:nth-child(even){background-color: #f2f2f2;}

		#customers tr:hover {background-color: #ddd;}

		#customers th {
		    padding-top: 12px;
		    padding-bottom: 12px;
		    text-align: left;
		    background-color: #4CAF50;
		    color: white;
		}
		</style>
	</head>
	<body>
		<?php
			$citta = 'Bergamo';
			$numero = 10;
			$query = 'pizzeria';
			
			$indirizzo = "https://api.foursquare.com/v2/venues/search?v=20161016&client_id=11XI0DDGN1GS1UWD2CQ0J4JPSI3MIYDX1QVI4ZNR4SOTPBKC&client_secret=CXE2TQI3BBFKVLY5MIG5TSHCDIQOY3ABMT4BMNBQU4IUKY0J&query=$query&lim=$numero&near=$citta";
		
			// Get cURL resource
			$curl = curl_init();
			// Set some options - we are passing in a useragent too here
			curl_setopt_array($curl, array(CURLOPT_RETURNTRANSFER => 1,CURLOPT_URL => $indirizzo));
			// Send the request & save response to $resp
			$json = curl_exec($curl);
			// Close request to clear up some resources
			

			//echo "$resp";
			
			$obj = json_decode($json);
			echo "<table id='customers'>";
			echo "<th>Nome</th>";
			echo "<th>Latitudine</th>";
			echo "<th>Longitudine</th>";
			
			for($i=0;$i<$numero;$i++)
			{
				echo "<tr>";
				echo "<td>".$obj->response->venues[$i]->name."</td>";
				echo "<td>".$obj->response->venues[$i]->location->lat."</td>";
				echo "<td>".$obj->response->venues[$i]->location->lng."</td>";
				echo "</tr>";
			}
			echo "</table>";
			curl_close($curl);
		?>
	</body>
</html>
