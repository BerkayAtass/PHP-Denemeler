<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

	<?php

	$DegerBir			=	99.88;
	$DegerBirVeriTuru	=	gettype($DegerBir);

	echo "Birinci Veri İçeriği : " . $DegerBir . "<br />";
	echo "Birinci Veri Türü : " . $DegerBirVeriTuru . "<br />";

	$DegerIki			=	(boolean) 65.98;
	$DegerIkiVeriTuru	=	gettype($DegerIki);

	echo "İkinci Veri İçeriği : " . $DegerIki . "<br />";
	echo "İkinci Veri Türü : " . $DegerIkiVeriTuru;
		
	?>
    
</body>
</html>