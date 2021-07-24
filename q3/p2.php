<?php
    include "data.php";

    $name=$_POST["name"];
    $numberOfQuestion=$_POST["slc"];
    //echo "<br>name : ".$_POST["name"];
    //echo "<br>slc  : ".$_POST["slc"];
?>
<html>
<head>
</head>
<body>
    <form action="p3.php" method="post">
        <input type="text" name="name" value="<?php echo $name; ?>" style="display:none;">
        <input type="text" name="slc" value="<?php echo $numberOfQuestion; ?>" style="display:none;">
<?php
for($c=0;$c<$numberOfQuestion;$c++)
{
    echo"<div>";
    echo"<p><strong>".($c+1).". ".$question[$c][1]."</strong></p>";
    echo"<input type='radio' name='qmc".$c."' value='".$question[$c][2]."'>";
    echo $question[$c][2];
    echo"<input type='radio' name='qmc".$c."' value='".$question[$c][3]."'>";
    echo $question[$c][3];
    echo"</div>";

}
?>

        <input type="submit">
    </form>

</body>
</html>
