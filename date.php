<?php
function dates($time1, $time2) 
{ 
    if (strtotime($time1) < strtotime($time2)) 
        return 1; 
    else if (strtotime($time1) > strtotime($time2))  
        return -1; 
    else
        return 0; 
} 

$bookingdates = array("02-March-2016", "17-January-2006", "11-August-2017");

usort($bookingdates, "dates"); 
  
print_r($bookingdates);