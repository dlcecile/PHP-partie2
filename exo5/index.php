<?php
$page = "exercice5";
include '../header.php';
?>
<?php
$gender= "femme";
if ($gender != "homme") {
  echo "C'est une développeuse";
}
else {
  echo "c'est un développeur";
}
 ?>
<?php
include '../footer.php';
 ?>
