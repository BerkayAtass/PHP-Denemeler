<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

	<?php

	

	$Bilgiler		=	array("Isim" => "Siber", "Soyisim" => "Vatan", "Sehir" => "Zonguldak");
	
	echo "<pre>";
	print_r($Bilgiler);
	echo "<pre><br /><br />";
	
	$Sonuc			=	serialize($Bilgiler);
	
	echo $Sonuc;

	echo "<br>"."<br>";
	echo "<br>"."<br>";


	$Bilgiler		=	'a:3:{s:4:"Isim";s:5:"Siber";s:7:"Soyisim";s:5:"Vatan";s:5:"Sehir";s:9:"Zonguldak";}';
		
	echo $Bilgiler . "<br /><br />";

	$Sonuc			=	unserialize($Bilgiler);

	echo "<pre>";
	print_r($Sonuc);
	echo "<pre>";
	?>
    
</body>
</html>