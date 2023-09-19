<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    setcookie("Yavuzlar", "Siber Vatan");
	
	$Cerez	=	$_COOKIE["Yavuzlar"];
	echo $Cerez;
	
	?>
    
</body>
</html>