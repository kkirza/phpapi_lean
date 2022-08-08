

<?php

$url = 'http://api.openweathermap.org/data/2.5/weather';

$options = [
	'id' => 703448, // id city Kiev 
	'appid' => '9dd8d285c761322cf201dfadd0d53765', // my API key
	'units' => 'metric',
	'lang' => 'ru',
];

$ch = curl_init(); // generate request output/input 
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); //  processed immediately
curl_setopt($ch, CURLOPT_URL, $url . '?' . http_build_query($options)); //  setting

$response = curl_exec($ch);
curl_close($ch);

$response = json_decode($response, true);

echo "Температура в городе {$response['name']}: {$response['main']['temp']} градусов цельсия, {$response['weather'][0]['description']} ";
