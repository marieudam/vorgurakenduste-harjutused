<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />

<type="text/css">

<style>

<?php 
$background="#fff";
if (isset($_POST["background"]) && $_POST["background"]!="") {
    	$background=htmlspecialchars($_POST["background"]);
	}

$colortext="#000"; // vaikimisi värv
	if (isset($_POST["colortext"]) && $_POST["colortext"]!="") {
    	$colortext=htmlspecialchars($_POST["colortext"]);
	}

$border="10"; // vaikimisi väärtus
	if (isset($_POST["border"]) && $_POST["border"]!="") {
    	$colortext=htmlspecialchars($_POST["border"]);
	}

$bordercolor="#000"; // vaikimisi väärtus
	if (isset($_POST["bordercolor"]) && $_POST["bordercolor"]!="") {
    	$colortext=htmlspecialchars($_POST["bordercolor"]);
	}

 ?>

#box {
	color: <?php echo $colortext; ?>;
	background-color: <?php echo $background; ?>;
	border-width: <?php echo $border; ?>;
	border-color: <?php echo $bordercolor; ?>;
	border-style: solid;
	}

</style>

</head>

<body>

<div id="box">
<?php
	if(isset($_POST) && array_key_exists("text",$_POST))
        {
             echo $_POST["text"];
        }
    ?>


</div>

<br><br>

<form action="yl1.php" method="post">
	<textarea name="text" rows="5" cols="30">Suvaline tekst.</textarea><br><br>
	<input type="color" name="background" value="#ff0000">&nbsp;Taustavärv<br><br>
	<input type="color" name="colortext" value="#000000">&nbsp;Teksti värv<br><br>
	<input type="number" name="border" min="1" max="20">&nbsp;Piirjoone laius (1-20px)<br><br>
	<select name="cars">
    	<option value="solid">Solid</option>
    	<option value="dotted">Dotted</option>
    	<option value="dashed">Dashed</option>
    	<option value="Double">Double</option>
  	</select>&nbsp;Piirjoone tüüp<br><br>
  	<input type="color" name="bordercolor" value="#ffffff">&nbsp;Piirjoone värv<br><br>
  	<input type="number" name="borderradius" min="1" max="100">&nbsp;Piirjoone nurga raadius (1-100px)<br><br>
	<input type="submit">
</form>



</body>

</html>