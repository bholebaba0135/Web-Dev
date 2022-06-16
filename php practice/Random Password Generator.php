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
    function rand_Pass($lower=3 ,$upper=7 ,$num=8, $other=9){
        $pass_order=array();
        $passWord='';
        for ($i=0;$i<$upper;$i++){
            $pass_order[]=chr(rand(65,90));
        }
        for ($i=0;$i<$lower;$i++){
            $pass_order[]=chr(rand(97,122));
        }
        for ($i=0;$i<$num;$i++){
            $pass_order[]=chr(rand(48,57));
        }
        for ($i=0;$i<$upper;$i++){
            $pass_order[]=chr(rand(33,47));
        }
        shuffle($pass_order);
        foreach ($pass_order as $char){
            $passWord .= $char;
        }
        return $passWord;
    }
    echo "Generated Password : ".rand_pass();
    ?>
</body>
</html>