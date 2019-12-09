<?php
  $page = 'exercice5';
  include '../header.php';
  $gender = 'femme';
  $result = '';
  if ($gender != 'homme') {
    $result = 'C\'est une développeuse';
  }
  else {
    $result = 'C\'est un développeur';
  }
?>
<p><?= $result ?></p>
<?php
include '../footer.php';
 ?>
