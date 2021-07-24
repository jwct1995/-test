<?php
    include "data.php";
?>
<html>
<head>
</head>
<body>

<form action="p2.php" method="post">
    Name : <input id="name" name="name">
    <br>
    Question Count : <select id="slc" name="slc">
    <?php
        for($c=0;$c<sizeof($question);$c++)
            echo"<option>".($c+1)."</option>"
    ?>
    </select>
    <br>
    <input type="submit">
</form>

</body>
</html>
