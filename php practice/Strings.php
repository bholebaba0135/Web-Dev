<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="q3_7.php" method="post">
        String: <input type="text"  name="string"><br>
        <input type="submit">
    </form>
    <?php if(isset($_POST["string"])): ?>
        <?php 
        $oStr=$_POST["string"];
       $pattern="/[^A-Za-z0-9 ]/";
       $nStr=preg_replace($pattern," ",$oStr);
       echo "Old String: ";
       echo $oStr;
       echo "<br>";
       echo "New String: ";
       echo $nStr;
        ?>
        <?php endif; ?>
</body>
</html>