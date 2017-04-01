<?php

$kassid = array( 
		array("nimi" => "Miisu", "vanus" => 2, "karv" => "hall", "sugu" => "emane", "omanik" => "Marie"), 
		array('nimi'=> "Tom", "vanus" => 1, "karv" => "valge", "sugu" => "isane", "omanik" => "Karla"),
		array('nimi'=> "Miiu", "vanus" => 7, "karv" => "must", "sugu" => "isane", "omanik" => "Mari")
	);

foreach ($kassid as $kass) {
	include "/home/mudam/public_html/VRI/kassid.html";
}



?>