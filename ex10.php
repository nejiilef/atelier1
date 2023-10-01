<!DOCTYPE html>
<html>
<head>
    <title>tirage</title>
</head>
<body>
    <?php
    $v=rand(0,1000);
    while($v%2!=0){
        $v=rand(0,1000);
    }
    echo"le premier nombre pair est $v";
    ?>
</body>
</html>