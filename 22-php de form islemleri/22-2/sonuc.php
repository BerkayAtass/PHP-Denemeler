<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    $GelenAdSoyad = $_POST["AdSoyad"];
    $GelenHobilerListesi = $_POST["Hobiler"];

    echo "Ad Soyad :" . $GelenAdSoyad . "<br/>";
    echo "Hobileriniz : <br/>" ;
   
    foreach($GelenHobilerListesi as $temp){
        echo $temp. "<br/>";
    }

    ?>
</body>
</html>