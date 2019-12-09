<?php
  $page = 'exercice7';
  include '../header.php';
  $result = '';
  $isok = false;
  if (!$isok) {
    $result = 'C\'est pas bon';
  }
  else {
    $result = 'C\'est ok';
  }
?>
<p><?= $result ?></p>
<?php
include '../footer.php';
 ?>
