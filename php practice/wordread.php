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
$file=fopen("list.txt","r") or die("Unable to open the file");
while(!feof($file)){
    $buffer= fscanf($file,"%s %s %d",$name, $title, $age);
     //echo $firstchar;
}
//echo $firstchar;
fclose($file);
if ($buffer==3){
echo "$name $title $age";
}
?>
</body>
</html>