<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        $temp = 1;
        while($temp<1000){
            echo "Temp : " . $temp . "<br/>";

            if($temp == 45){
                break;
            }
            $temp++;
        }
    ?>
</body>
</html>