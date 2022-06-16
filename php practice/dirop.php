<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $fp=fopen("FirstFile.txt","a");
    flock($fp,LOCK_EX);
    
    if (is_writable("FirstFile.txt")){
        echo "www is a directory";
    }
    else{
        echo "www is not a directory";
    }
    fclose($fp);
    ?>
</body>
</html>