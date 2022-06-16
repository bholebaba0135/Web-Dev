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
    echo "<table>";
$myDirectory = opendir("."); // use the current directory
while($entryname = readdir($myDirectory)) {
echo "<tr>";
echo "<td>$entryname</td>";
echo "<td align=\"right\">";
echo filesize($entryname); // the filesize function returns the file size in bytes
echo "</td>";
echo "</tr>\n";
}
echo "</table>";
closedir($myDirectory);
?>

</body>
</html>