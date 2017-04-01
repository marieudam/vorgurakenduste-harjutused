<?php

function peegelPilt($string) {

//$str = "abcdef";

$strlen = strlen($string);

$x = $strlen - 1;

while($x >= 0) {
  echo $string[$x];
  $x--;
} 
}

peegelPilt("mingi tekst");



?>