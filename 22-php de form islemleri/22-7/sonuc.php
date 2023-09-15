<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    /*
        $gelenAdSoyad    = $_GET["AdSoyad"];
        $gelenEmail      = $_GET["Email"];
        $gelenTelefon    = $_GET["Telefon"];
        $gelenCinsiyet   = $_GET["Cinsiyet"];
       
        echo "Ad Soyad       :" . $gelenAdSoyad . "<br>";
        echo "E-mail Adresi  :" . $gelenEmail. "<br>";
        echo "Telefon        :" . $gelenTelefon. "<br>";
        echo "Cinsiyet       :" . $gelenCinsiyet. "<br>";
    */

        $GelenTumDegerler = $_GET;

        foreach($GelenTumDegerler as $Anahtar => $Deger){
            echo $Anahtar. " : " . $Deger . "<br/>";
        }


    ?>

</body>
</html>