<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    $NewFile = $_FILES["File"];
    $NewFileName = $_FILES["File"]["name"];
    $NewFileType = $_FILES["File"]["type"];
    $NewFileTempName = $_FILES["File"]["tmp_name"];
    $NewFileSize = $_FILES["File"]["size"];

    $Path = "DownloadFiles/";
    $FilePathandName = $Path.$NewFileName;

    if(move_uploaded_file($NewFileTempName,$FilePathandName)){
        echo "File Uploaded Successfully!!<br/>";
        echo "File Name : ". $NewFileName ."<br/>";
        echo "<img src='{$FilePathandName}'> ";

    }else{
        
    }

    
    
    
    /*
    foreach($NewFile as $key => $temp){
        echo $key. "==>" .$temp . "<br>";
    }
    */


    ?>

</body>
</html>