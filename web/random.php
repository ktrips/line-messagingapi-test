<?php

$img = "https://ktribot.herokuapp.com/IMG_" . rand(1426,1568) . ".PNG";
  //. $_SERVER['SERVER_NAME'] 
$img_url = "<img src=" . $img . ">";
print $img_url;
