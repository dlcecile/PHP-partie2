<?php
  $page = 'exercice8';
  include '../header.php';
  $result = '';
  $isok = true;
  if ($isok) {
    $result = 'C\'est bon';
  }
  else {
    $result = 'C\'est pas bon';
  }
?>
<p><?= $result ?></p>
<?php
include '../footer.php';
 ?>
