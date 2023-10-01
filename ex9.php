<!DOCTYPE html>
<html>
<head>
    <title>nombre multiple de 3 et de 5</title>
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
        if($v%3==0 && $v%5==0){
            echo"le nombre $v est un multiple de 3 et 5";}
            else{
                echo "le nombre $v n'est pas multiple de 3 et 5";}}
                ?>
                </body>
                </html>