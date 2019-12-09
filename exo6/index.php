<?php
  $page = 'exercice6';
  include '../header.php';
  $result = '';
  $age = 24;
  if ($age >= 18) {
    $result = 'Tu es majeur';
  }
  else {
    $result = 'Tu es mineur';
  }
?>
<p><?= $result ?></p>
<?php
include '../footer.php';
 ?>
