<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="q1_14.php" method="post">
    <center>
     <b>   Resume : </b><input type="file" name="myfile"><br><br>
        <input type="submit"></center>
    </form>
    <?php if(isset($_POST["myfile"])): ?>
        <?php echo "<center><br>Your file: ".$_POST["myfile"]."</center>"; 
        
        ?>
        <?php endif; ?>
</body>
</html>