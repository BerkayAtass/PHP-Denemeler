<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
	<?php
	
	echo "Dosyanın Adı : " . $_FILES["Dosya"]["name"] . "<br />";
	echo "Dosyanın MIME Türü : " . $_FILES["Dosya"]["type"] . "<br />";
	echo "Dosyanın Temp Dizini : " . $_FILES["Dosya"]["tmp_name"] . "<br />";
	echo "Dosyanın Bytesi : " . $_FILES["Dosya"]["size"] . "<br />";
	echo "Dosyanın Hata Kodu Değeri : " . $_FILES["Dosya"]["error"];
	
	?>

    
</body>
</html>