<!DOCTYPE html>
<html>
<body>
    <?php
$nom="neji";
$pre="ilef";
echo"$nom $pre <br>";
echo"$nom <br> $pre";
?>
<table class="table" border='1'>
  <thead>
    <tr>
      <th >nom</th>
      <th >prenom</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td><?=$nom?></td>
      <td><?=$pre?></td>
    </tr>
</tbody>
</table>
</body>
</html>