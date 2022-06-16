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
  <h3 style="font-weight:500;color:aliceblue;background-color:black;padding:6px;border-radius:4px;width:fit-content;margin-left:24px;">GPA Calculator</h3>
    <form action="gpacalc.php" method="post">
        <div style="width:fit-content;height:fit-content;border:4px solid red;padding:5px">
     <b>Course 1: </b><select name="Grade1" class="boxes"  autofocus required>
  <option value=10.0 >S</option>
  <option value=9.0>A</option>
  <option value=8.0>B</option>
  <option value=7.0>C</option>
  <option value=6.0>D</option>
  <option value=5.0>E</option>
  <option value=4.0>F</option>
  </select>
 
  <select name="Credits1" class="boxes" autofocus required >
    <option value=1.0>1</option>
    <option value=2.0>2</option>
    <option value=3.0>3</option>
    <option value=4.0>4</option>
    <option value=5.0>5</option>
    <option value=6.0>6</option>
    <option value=7.0>7</option>
    </select>
    <br><br>
    <b>Course 2: </b><select name="Grade2" class="boxes" autofocus required>
        <option value=10.0>S</option>
        <option value=9.0>A</option>
        <option value=8.0>B</option>
        <option value=7.0>C</option>
        <option value=6.0>D</option>
        <option value=5.0>E</option>
        <option value=4.0>F</option>
        </select>
       
        <select name="Credits2" class="boxes" autofocus required >
          <option value=1.0>1</option>
          <option value=2.0>2</option>
          <option value=3.0>3</option>
          <option value=4.0>4</option>
          <option value=5.0>5</option>
          <option value=6.0>6</option>
          <option value=7.0>7</option>
          </select>
          <br><br>
          <b>Course 3: </b><select name="Grade3" class="boxes" autofocus required>
            <option value=10.0>S</option>
            <option value=9.0>A</option>
            <option value=8.0>B</option>
            <option value=7.0>C</option>
            <option value=6.0>D</option>
            <option value=5.0>E</option>
            <option value=4.0>F</option>
            </select>
           
            <select name="Credits3" class="boxes" autofocus required >
              <option value=1.0>1</option>
              <option value=2.0>2</option>
              <option value=3.0>3</option>
              <option value=4.0>4</option>
              <option value=5.0>5</option>
              <option value=6.0>6</option>
              <option value=7.0>7</option>
              </select>
              <br><br>
              <b>Course 4: </b><select name="Grade4" class="boxes" autofocus required>
                <option value=10.0>S</option>
                <option value=9.0>A</option>
                <option value=8.0>B</option>
                <option value=7.0>C</option>
                <option value=6.0>D</option>
                <option value=5.0>E</option>
                <option value=4.0>F</option>
                </select>
               
                <select name="Credits4" class="boxes" autofocus required >
                  <option value=1.0>1</option>
                  <option value=2.0>2</option>
                  <option value=3.0>3</option>
                  <option value=4.0>4</option>
                  <option value=5.0>5</option>
                  <option value=6.0>6</option>
                  <option value=7.0>7</option>
                  </select>
                  <br><br>
                  <b>Course 5: </b><select name="Grade5" class="boxes" autofocus required>
                    <option value=10.0>S</option>
                    <option value=9.0>A</option>
                    <option value=8.0>B</option>
                    <option value=7.0>C</option>
                    <option value=6.0>D</option>
                    <option value=5.0>E</option>
                    <option value=4.0>F</option>
                    </select>
                   
                    <select name="Credits5" class="boxes" autofocus required >
                      <option value=1.0>1</option>
                      <option value=2.0>2</option>
                      <option value=3.0>3</option>
                      <option value=4.0>4</option>
                      <option value=5.0>5</option>
                      <option value=6.0>6</option>
                      <option value=7.0>7</option>
                      </select>


</div>
<br>
<input type="submit">
    </form>
    <?php if(isset($_POST["Grade1"]) && isset($_POST["Grade2"]) && isset($_POST["Grade3"]) && isset($_POST["Grade4"]) && isset($_POST["Grade5"])
    && isset($_POST["Credits1"]) && isset($_POST["Credits2"]) && isset($_POST["Credits3"]) && isset($_POST["Credits4"]) && isset($_POST["Credits5"])):
    ?>
    <?php
    
    $gpa= ($_POST["Grade1"]*$_POST["Credits1"]+$_POST["Grade2"]*$_POST["Credits2"]+$_POST["Grade3"]*$_POST["Credits3"]+$_POST["Grade4"]*$_POST["Credits4"]+$_POST["Grade5"]*$_POST["Credits5"])/($_POST["Credits1"]+$_POST["Credits2"]+$_POST["Credits3"]+$_POST["Credits4"]+$_POST["Credits5"]);
    echo "<br><b>Net GPA is: </b>".$gpa;
    ?>
    <?php endif; ?>
</body>
</html>
