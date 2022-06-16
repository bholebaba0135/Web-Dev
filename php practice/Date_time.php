<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="q5_7.php" method="post">
        DATE 1: <input type="date" name="date1"><br>
        DATE 2: <input type="date" name="date2"><br>
        <input type="submit">
    </form>
    <?php if(isset($_POST["date1"]) && isset($_POST["date2"])): ?>
        <?php 
        $date1=date_create($_POST["date1"]);
        $date2=date_create($_POST["date2"]);
        $diff=date_diff($date1,$date2);
        echo $diff->days. " days in total <br> And<br>";
        echo $diff->y. " years ";
        echo $diff->m. " months ";
        echo $diff->d. " days ";
        echo $diff->h. " hours ";
        echo $diff->i. " minutes ";
        echo $diff->s. " seconds ";
       
        ?>
        <?php endif; ?>
</body>
</html>