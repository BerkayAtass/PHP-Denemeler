<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
         
        $value1 = 15;
        $value2 = "berkay";

        define("VALUE3","SIBER");
        define("VALUE4","VATAN");

        const VALUE5 = "YAVUZLAR";
        const VALUE6 = "ZAYOTEM";

        $values = array($value1,$value2,"BAKKA" => VALUE3,VALUE4,VALUE5,VALUE6,"newValue");

        echo "<pre>";
        print_r($values);
        echo "</pre>";


    ?>

</body>
</html>