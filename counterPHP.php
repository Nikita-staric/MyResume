<?php
$counter=isset($_COOKIE['counter']) ? $_COOKIE['counter'] :0;
$setcookie("counter",$counter);
echo $counter
?>
  