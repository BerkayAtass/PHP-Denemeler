<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        
        $color = "black";
        if($color == "white"){
            function yavuzlar(){
                echo "YAVUZ GELIYOR YAVUZ!! (white)";
            }  
        }elseif($color == "black"){
            function yavuzlar(){
                echo "YAVUZ GELIYOR YAVUZ!! (black)";
            }   
        }
       
        yavuzlar();


    ?>
</body>
</html>