<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

	<?php

	$Deger						=	99.88;
	$DegerIcerigininIlkVeriTuru	=	gettype($Deger);
	
	echo "İçeriğin İlk Hali : " . $Deger . "<br />";
	echo "İçeriğin İlk Halinin Veri Türü : " . $DegerIcerigininIlkVeriTuru . "<br /><br />";
	
	settype($Deger, "int"); // integer
	
	$DegerIcerigininSonVeriTuru	=	gettype($Deger);
	
	echo "İçeriğin Son Hali : " . $Deger . "<br />";
	echo "İçeriğin Son Halinin Veri Türü : " . $DegerIcerigininSonVeriTuru;
	
	?>
    
</body>
</html>