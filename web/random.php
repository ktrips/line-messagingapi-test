<?php

$img = "https://" . $_SERVER['SERVER_NAME'] . "/IMG_" . rand(1426,1568) . ".PNG";
$img_url = "<img src=" . $img . ">";
print($img_url);
