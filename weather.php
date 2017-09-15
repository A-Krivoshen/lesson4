<?php
$cache_lifetime = 3600;
$filename = 'cache.txt';

if ( time()-filemtime($filename) < $cache_lifetime )
{
    
    echo file_get_contents($filename);
    exit;
}

$json = file_get_contents('http://api.openweathermap.org/data/2.5/weather?id=524901&appid=9c24c2f989b4147c64c0ebf8d7a3f614');
$allData = json_decode($json, true);
echo 'name:' . $allData['name'] . "<br>" .
    'weather: ' . $allData['weather'][0]['main'] . "<br>" .
    'description: ' . $allData['weather'][0]['description'] . "<br>" .
    'temperature: ' . $allData['main']['temp'] . "<br>" .
    'visibility ' . $allData['visibility'] . "<br>" .
    'pressure:' . $allData['main']['pressure'];
file_put_contents($filename,$allData);  

?>

