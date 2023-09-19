<?php
declare(strict_types=1);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

	<?php

	function Deneme(string $Isim, string $Soyisim, int $Yas){
			
		$Birlestir	=	$Isim . " " . $Soyisim . "<br />Yaş : " . $Yas;

		return $Birlestir;
		
	}

	$Sonuc	=	Deneme("Siber", "Vatan", 38);

	echo $Sonuc;
	?>
    
</body>
</html>