<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        function islem($deger1, $deger2, $deger3, $deger4){

            $returnDegeri = "  deger1 = " . $deger1 . "  deger2 = " . $deger2 . "  deger3 = " . $deger3 . "  deger4 = " . $deger4;
            return $returnDegeri;
            };

      
      
        $degerTutucu = islem(15,345,"selam",123);

        echo $degerTutucu;
    ?>
    
</body>
</html>