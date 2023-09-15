<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    if(!$_GET){
    ?>
    <form action="index.php" method="get">
        Ad Soyad : <input type="text" name="AdSoyad" ><br>
        E-mail Adresi :<input type="email" name="Email" ><br>
        Telefon :<input type="text" name="Telefon" ><br>
        Cinsiyet :<input type="radio" name="Cinsiyet" value="Erkek">Erkek<input type="radio" name="Cinsiyet" value="Kadin">Kadin<br>
        <input type="submit" value="Gonder">
    </form>
    <?php
    }else{
        $gelenAdSoyad    = $_GET["AdSoyad"];
        $gelenEmail      = $_GET["Email"];
        $gelenTelefon    = $_GET["Telefon"];
        $gelenCinsiyet   = $_GET["Cinsiyet"];
       
        echo "Ad Soyad       :" . $gelenAdSoyad . "<br>";
        echo "E-mail Adresi  :" . $gelenEmail. "<br>";
        echo "Telefon        :" . $gelenTelefon. "<br>";
        echo "Cinsiyet       :" . $gelenCinsiyet. "<br>";
    }
    ?>
</body>
</html>