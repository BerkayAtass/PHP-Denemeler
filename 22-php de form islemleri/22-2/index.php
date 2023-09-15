<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="Sonuc.php" method="post">
        Ad Soyad : <input type="text" name="AdSoyad" ><br>
        Hobileriniz : <br>
        <input type="checkbox" name="Hobiler[]" value="KitapOkumak">Kitap Okumak<br>
        <input type="checkbox" name="Hobiler[]" value="Spor">Spor<br>
        <input type="checkbox" name="Hobiler[]" value="Muzik">Muzik<br>
        <input type="checkbox" name="Hobiler[]" value="Oyun">Oyun<br>
        <input type="checkbox" name="Hobiler[]" value="Film/Dizi">Film/Dizi<br>
        <br>
        <input type="submit" value="Gonder">
    </form>
</body>
</html>