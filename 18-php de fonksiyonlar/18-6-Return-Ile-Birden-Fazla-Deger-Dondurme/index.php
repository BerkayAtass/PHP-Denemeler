<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        $islem = function(){

            $deger1 = "deger1";
            $deger2 = "deger2";
            $deger3 = "deger3";
            $deger4 = "deger4";

            return array($deger1, $deger2, $deger3, $deger4);
            };

        $degerler = $islem();
      
        echo "<pre>";
        print_r($degerler);
        echo "</pre>";
    ?>
    
</body>
</html>