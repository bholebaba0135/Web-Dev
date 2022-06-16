<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    
    <table style='border:solid 1px black;width:270px;border-collapse:collapse;'>
    <?php
    $i=0;
    $j=0;
    for($i=0;$i<9;$i++)
    {
        echo "<tr>";
        for($j=0;$j<9;$j++)
        {
            if($i%2==0)
            {
                if($j%2==0){
                    echo "<td style='width:30px; height:30px; background-color:black;'></td>";
                }
                else{
                    echo "<td style='width:30px; height:30px; background-color:white;'></td>";

                }

            }
            else{
                if($j%2==1){
                    echo "<td style='width:30px;height:30px; background-color:black;'></td>";
                }
                else{
                    echo "<td style='width:30px; height:30px; background-color:white;'></td>";
                }
            }
        }
        echo "</tr>";
    }
    

    ?>
    </table>
</body>
</html>