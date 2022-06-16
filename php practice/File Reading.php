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
    
   $word_content=file_get_contents("file.txt");
   $word_count=0;
   for ($i=0;$i<strlen($word_content);$i++){
       if ($word_content[$i]==" "){
           $word_count++;

       }
   }
   $word_count +=1; //To count the last word.
   
   echo "<center><b>The content of your file is : </b>".$word_content."</center>";
   echo "<br><center><b>The total no. of words in your file is : </b>".$word_count."</center>";


    ?>
</body>
</html>