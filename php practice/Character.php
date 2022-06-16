<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="q4_7.php" method="post">
        Character: <input type="text" maxlength="1" name="char"><br>
        <input type="submit">
    </form>
    >
        <?php 
        $char=$_POST["char"];
        $nextChar=++$char;
        if(strlen($nextChar)>1)
        {
            $nextChar=$nextChar[0];
        }
        echo "Next Character is ".$nextChar;
        
        ?>
        
</body>
</html>