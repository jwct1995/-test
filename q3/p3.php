<?php
    include "data.php";

    $name=$_POST["name"];
    $numberOfQuestion=$_POST["slc"];
?>
<html>
<head>
</head>
<style>
.correct{background-color: #57ff57;}
.fault{background-color: #ff3838;}
</style>
<body>
    <form action="p1.php" >
<?php


for($c=0;$c<$numberOfQuestion;$c++)
{
    $userChoice=$_POST["qmc".$c];

    echo"<div>";

    echo"<p><strong>".($c+1).". ".$question[$c][1]."</strong></p>";


    $cssClass="";
    $scole=0;
    if($userChoice==$question[$c][4])
    {
        $cssClass="correct";
        $scole++;
    }
    else
        $cssClass="fault";


    if($userChoice==$question[$c][2])
        echo"<group class='".$cssClass."'>";
    else
        echo"<group>";


    if($userChoice==$question[$c][2])
        echo"<input type='radio' value='".$question[$c][2]."' checked='checked'>";
    else
        echo"<input type='radio' value='".$question[$c][2]."'>";
    echo $question[$c][2];
    echo"</group>";

    if($userChoice==$question[$c][3])
        echo"<group class='".$cssClass."'>";
    else
        echo"<group>";

    if($userChoice==$question[$c][3])
        echo"<input type='radio' value='".$question[$c][3]."' checked='checked'>";
    else
        echo"<input type='radio' value='".$question[$c][3]."'>";
    echo $question[$c][3];
    echo"</group>";

    echo"</div>";

}
echo "<br>User : ".$name;
echo "<br>Answered Question : ".$numberOfQuestion;
echo "<br>Scole : ".$scole."/".$numberOfQuestion."(".(($scole/$numberOfQuestion)*100)."%)";
?>
        <br>
        <button>Back to page one</button>
    </form>

</body>
</html>
