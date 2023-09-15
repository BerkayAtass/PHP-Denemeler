<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    $NewFiles = $_FILES["Files"];

    foreach($NewFiles["tmp_name"] as $Key => $ElementValue){
        $KeyValue = $Key;
        $NewFileName = $NewFiles["name"][$KeyValue];
        $NewFileType = $NewFiles["type"][$KeyValue];
        $NewFileTempName = $NewFiles["tmp_name"][$KeyValue];
        $NewFileSize = $NewFiles["size"][$KeyValue];
    
        $Path = "DownloadFiles/";
        $FilePathandName = $Path.$NewFileName;

        
        if(move_uploaded_file($NewFileTempName,$FilePathandName)){
            echo "File Uploaded Successfully!!<br/>";
            echo "File Name : ". $NewFileName ."<br/>";
            echo "<img src='{$FilePathandName}'> ";
            echo "<br/>";
        }else{
            
        }


    }

    
    /*
    foreach($NewFiles["tmp_name"] as $key => $temp){
        echo $key. "==>" .$temp . "<br>";
    }
    */


    ?>

</body>
</html>