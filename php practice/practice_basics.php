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
    echo "<h1 align='center'>Anmol's Website</h1>";
    echo "<hr>";
    echo "<p style='color:green;'>This is my site</p>";
    $Nomoe="Anmol Gupta";
    $Age=20;
    echo "<p style='font-family:Segoe UI;color:blue'>$Nomoe is $Age years old and this is his journey</p>";
    echo strtolower($Nomoe);
    echo "<br>";
    echo strtoupper($Nomoe);
    echo "<br>";
    echo strlen($Nomoe);
    echo "<br>";
    echo $Nomoe[0];
    echo "<br>";
    echo substr($Nomoe,8,2);
    echo "<br>";
    $Nomoe[0]="O";
    echo "$Nomoe";
    echo "<br>";
    echo str_replace("Onmol","Bhumi",$Nomoe);
    echo "<br>";
    echo 40+30.9;
    echo "<br>";
    echo 40/-9.34;
    echo "<br>";
    echo 40*-9.53;
    echo "<br>";
    echo 5-98.067;
    echo "<br>";
    echo 10%3.0;
    echo "<br>";
    echo 4+5*-9;
   // echo ("Oh! So you are "+$_GET["name"]+"<br>Lol you are just "+$_GET["age"]+" years old!");//WRONG
    


    ?>
    <br>
    <!--Getting User Input !-->
    
   <form action="site.php" method="GET">
        Name: <input type="text" name="name"><br>
        Age: <input type="text" name="age"><br>
        <input type="submit">
    </form>
    <br>
    <?php if(isset($_GET['name'])): ?>
    Hello <?php echo $_GET["name"]; ?>
    <?php endif; ?>
    <br>
    <?php if(isset($_GET["age"])): ?>
    You are <?php echo $_GET["age"]; ?>years old now!
    <?php endif; ?>
<!--Calculator for Addition !-->
<form action="site.php" method="get">
    <input type="number" name="num1" placeholder="Enter First No.">
    <br>
    <input type="number" name="num2" placeholder="Enter Second No.">
    <input type="Submit">
</form>
<?php if(isset($_GET["num1"]) && isset($_GET["num2"])): ?>
    <?php echo $_GET["num1"] + $_GET["num2"]; ?>
    <?php endif; ?>
<!-- Mad Libs Game !-->
<form action="site.php" method="get">
    Color:<input type="text" name="color"> <br>
    pluralNoun:<input type="text" name="pluralNoun"><br>
    Celebrity:<input type="text" name="celebrity"><br>
    <input type="submit">
</form> 
<?php
if(isset($_GET["color"]) && isset($_GET["pluralNoun"]) && isset($_GET["celebrity"])): ?>
<?php
$color=$_GET["color"];
$pluralNoun=$_GET["pluralNoun"];
$celebrity=$_GET["celebrity"];
?>
<?php
echo "<br>Roses are $color.<br>$pluralNoun are blue.<br>You are $celebrity, I love you!";
?>
<?php
endif;
?>
<!--Understanding URL Parameters -->
<form action="site.php" method="get">
    Name: <input type="text" name="named">
    <input type="submit">
</form>
<?php if(isset($_GET["named"])): ?>
    <?php echo $_GET["named"]; 
    echo $_GET["age"]; ?>
    <?php endif; ?>

<!--CheckBoxes !-->
<form action="site.php" method="post">
    Apples: <input type="checkbox" name="fruits[]" value="apples"><br>
    Oranges: <input type="checkbox" name="fruits[]" value="oranges"><br>
    Pears: <input type="checkbox" name="fruits[]" value="pears"><br>
    <input type="submit">
</form>
<?php if(isset($_POST["fruits"])): ?>
    <?php $fruit=$_POST["fruits"];
    echo $fruit[1]; ?>
    <?php endif; ?>
    <!--Practicing Associative Arrays -->
    <form action="site.php" method="post">
        Student: <input type="text" name="student"><br>
        <input type="submit">
    </form>
    <?php $grade = array("Anmol"=>"S+","Eshan"=>"A-"); ?>
    <?php if(isset($_POST["student"])): ?>
        <?php echo $grade[$_POST["student"]]; ?>
        <?php endif; ?>

</body>
</html>