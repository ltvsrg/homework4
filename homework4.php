<?php
$data ="http://api.openweathermap.org/data/2.5/find?q=Irkutsk,RU&type=like&APPID=5e6d312e3d726cf235f24bdcf80b1be3";
$data2 = file_get_contents($data);

$json=json_decode($data2,true);
$Time=$json['list'][0]['dt'];
echo 'Time: ', date('Y-m-d | H:i',strtotime("+6 hours",$Time)),'<br>';
echo 'Country: ', $Country=$json['list'][0]['sys']['country'],'<br>';
echo 'City: ', $City=$json['list'][0]['name'],'<br>';
echo 'Temperature: ', $Temperature=$json['list'][0]['main']['temp']-273.15,'°C','<br>';
echo 'Wind: ',$Wind=$json['list'][0]['wind']['speed'],' m/s',', ';
echo $Wind=$json['list'][0]['wind']['deg'],'<br>';
echo 'Cloudiness: ',$Cloudiness=$json['list'][0]['weather'][0]['description'],'<br>';
echo 'Pressure: ',$Pressure=$json['list'][0]['main']['pressure'],' hpa ','<br>';
echo 'Humidity: ', $Humidity=$json['list'][0]['main']['humidity'],'%','<br>';
echo 'Geo coords: ',$Geocoords=$json['list'][0]['coord']['lat'],', ';
echo $Geocoords=$json['list'][0]['coord']['lon'],'<br>';
