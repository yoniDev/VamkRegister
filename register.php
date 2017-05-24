	<html>
<head>
    <title>VAMK GUESTS</title>
</head>
<body>
    <center>
        <h1>VAMK GUESTS</h1>
    </center>
	<table border="4" bordercolor="blue" width="100%">
        <tr>
            <th colspan="3">VAMK GUEST REGISTRAION LIST</th> 
        </tr>
	<?php
	
	$ch = curl_init("https://azuremobapptest.azurewebsites.net/tables/Guest?ZUMO-API-VERSION=2.0.0");
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	 $data = curl_exec($ch);
	 $myArray = json_decode($data, true);
	
	for($i = 0; $i < count($myArray); $i++)
	{
	?>
		     
        <tr>
            <td><img src="<?php $myArray[$i]["image"];?>" alt="" border=2 height="100%" width="100%"></img></td>
			<td colspan="2">
			<?php  echo "  First Name: " .$myArray[$i]["fname"];?> <br>
			<?php  echo "  Last Name: " .$myArray[$i]["lname"];?> <br>
			<?php  echo "  Sex: " .$myArray[$i]["sex"];?> <br>
			<?php  echo "  Birthday: " .$myArray[$i]["birthday"];?> <br>
			<?php  echo "  Email: " .$myArray[$i]["email"];?> 
			</td>
        </tr>
	<?php
	}
        
	curl_close($ch);	
	
	?>
	 </table>
</body>
<html>
