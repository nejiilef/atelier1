<!DOCTYPE html>
<html>
<head>
    <title>nombre pair</title>
</head>
<body>
    <form method="post">
        <label >Valeur:</label>
        <input name="v" id="v" required>
        <br>
        <input type="submit" name="afficher" value="afficher">
    </form>

    <?php
    if(isset($_POST['afficher'])){
        
        $v=$_POST['v'];
        if($v%2==0){
            echo "le nombre $v est pair";
        }else{
            echo "le nombre $v est impair";
        }
    }
    ?>
    </body>
    </html>