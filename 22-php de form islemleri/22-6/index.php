<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="Sonuc1.php" method="get" name="BirinciForm">
        Ad Soyad : <input type="text" name="AdSoyad" ><br>
        E-mail Adresi :<input type="email" name="Email" ><br>
        Telefon :<input type="text" name="Telefon" ><br>
        Cinsiyet :<input type="radio" name="Cinsiyet" value="Erkek">Erkek<input type="radio" name="Cinsiyet" value="Kadin">Kadin<br>
        <input type="submit" value="Gonder">
    </form>
    <br>
    <br>
    <br>
    <!-- formlarin icine name vermez isek sonuc.php dosyalari yanlis formun
        bilgilerini cekebilir cunku form icindeki elemanlar ayni name isimlerine
        sahip.-->
    <form action="Sonuc2.php" method="get" name="IkinciForm">
        Ad Soyad : <input type="text" name="AdSoyad" ><br>
        E-mail Adresi :<input type="email" name="Email" ><br>
        Telefon :<input type="text" name="Telefon" ><br>
        Cinsiyet :<input type="radio" name="Cinsiyet" value="Erkek">Erkek<input type="radio" name="Cinsiyet" value="Kadin">Kadin<br>
        <input type="submit" value="Gonder">
    </form>
</body>
</html>