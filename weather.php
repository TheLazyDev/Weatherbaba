<!-- © 2015-2016 TheLazyDev(Bhavarsh Singh) -->

<?php

/*Turn off error reporting because some apache servers have Error reporting turned on by default */
error_reporting(0);

$city=$_GET['city']; //Used "$city" variable to store City Name via GET Method

$city=str_replace(" ","", $city); 
/* It changes Spaces to Nothing and joins City Name It is used here because  user might enter a city name which have space in both words and if its runs without converting spaces to nothing then it will throw error of 404:- not found and It can also disclose Some Important Stuff in PHP Code */

$contents=file_get_contents("http://www.weather-forecast.com/locations/".$city."/forecasts/latest"); 
/* file_get_contents function is used To read This file in string and $city variable here refers to the value we got from user and  $contents variable is used  to store this string which will be used to filter The information We need */


/* Used preg_match function which is same as regexp function in jQuery */
preg_match('/ 3 Day Weather Forecast Summary:<\/b><span class="read-more-small"><span class="read-more-content"> <span class="phrase">(.*?)</s', $contents, $matches); 

/* Tt will filter our Required information i.e 3 Days weather forecast and then will store that info in $matches variable that is an array */

echo $matches[1]; // It prints  The Information we need to display to the user

?>