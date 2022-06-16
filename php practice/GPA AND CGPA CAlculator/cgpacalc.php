<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
      .boxes{
    border-radius: 4px;
    -webkit-border-radius: 4px;
    -moz-border-radius: 4px;
    -ms-border-radius: 4px;
    -o-border-radius: 4px;
    border-width: 4px;
    width: 40px;
    border: 4px solid blueviolet;
    
}
    </style>

</head>
<body>
  <h3 style="font-weight:500;color:aliceblue;background-color:black;padding:6px;border-radius:4px;width:fit-content;margin-left:45px;">CGPA Calculator</h3>
    <form action="cgpacalc.php" method="post">
        <div style="width:fit-content;height:fit-content;border:4px solid red;padding:5px">
     <b>SEMESTER 1: </b><input type="number" name="GPA1" class="boxes" placeholder="GPA" autofocus required>
  <input type="number" name="Credits1" class="boxes" placeholder="credits" autofocus required>
    <br><br>
    <b>SEMESTER 2: </b><input type="number" name="GPA2" class="boxes" placeholder="GPA" autofocus required>
  <input type="number" name="Credits2" class="boxes" placeholder="credits" autofocus required>
          <br><br>
          <b>SEMESTER 3: </b><input type="number" name="GPA3" class="boxes" placeholder="GPA" autofocus required>
  <input type="number" name="Credits3" class="boxes" placeholder="credits" autofocus required>
              <br><br>
              <b>SEMESTER 4: </b><input type="number" name="GPA4" class="boxes" placeholder="GPA" autofocus required>
  <input type="number" name="Credits4" class="boxes" placeholder="credits" autofocus required>
                  <br><br>
                  <b>SEMESTER 5: </b><input type="number" name="GPA5" class="boxes" placeholder="GPA" autofocus required>
  <input type="number" name="Credits5" class="boxes" placeholder="credits" autofocus required>


</div>
<br>
<input type="submit">
    </form>
    <?php if(isset($_POST["GPA1"]) && isset($_POST["GPA2"]) && isset($_POST["GPA3"]) && isset($_POST["GPA4"]) && isset($_POST["GPA5"])
    && isset($_POST["Credits1"]) && isset($_POST["Credits2"]) && isset($_POST["Credits3"]) && isset($_POST["Credits4"]) && isset($_POST["Credits5"])):
    ?>
    <?php
    
    $gpa= ($_POST["GPA1"]*$_POST["Credits1"]+$_POST["GPA2"]*$_POST["Credits2"]+$_POST["GPA3"]*$_POST["Credits3"]+$_POST["GPA4"]*$_POST["Credits4"]+$_POST["GPA5"]*$_POST["Credits5"])/($_POST["Credits1"]+$_POST["Credits2"]+$_POST["Credits3"]+$_POST["Credits4"]+$_POST["Credits5"]);
    echo "<br><b>Net CGPA is: </b>".$gpa;
    ?>
    <?php endif; ?>
</body>
</html>
