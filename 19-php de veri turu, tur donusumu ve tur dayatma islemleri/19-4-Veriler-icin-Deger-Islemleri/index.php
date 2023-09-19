<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

	<?php

	$Deger				=	"Siber Vatan";
	$DegerVeriTuru		=	gettype($Deger);
	
	echo "İçerik : " . $Deger . "<br />";
	echo "Veri Türü : " . $DegerVeriTuru . "<br /><br />";
	
	echo "İçerik : " . intval($Deger) . "<br />";
	$DegerVeriTuruSon	=	gettype($Deger);
	echo "Veri Türü : " . $DegerVeriTuruSon;
	?>
    
</body>
</html>