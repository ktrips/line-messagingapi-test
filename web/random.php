<?php

$img = "https://ktribot.herokuapp.com/IMG_" . rand(1426,1468) . ".PNG";
  //. $_SERVER['SERVER_NAME'] 
$img_url = "<img src=" . $img . ">";
print $img_url;
