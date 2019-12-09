<?php
// la variable page renvoie au titre du header de l'exercice3
  $page = 'exercice3';
  $age = 6;
  $gender = 'femme';
// la variable result affiche le résultat
  $result = '';
  if ($gender == 'femme' && $age >= 18) {
    $result = 'Vous êtes une ' .$gender. ' et vous êtes majeur';
  }
  elseif ($gender == 'femme') {
    $result = 'Vous êtes une ' .$gender. ' et vous êtes mineur';
  }
  elseif ($gender == 'homme' && $age < 18) {
    $result = 'Vous êtes un ' .$gender. ' et vous êtes mineur';
  }
  else {
    $result = 'Vous êtes un ' .$gender. ' et vous êtes majeur';
  }
  include '../header.php';
?>
<p>Créer deux variables age et gender. La variable gender peut prendre comme valeur :</p>
<ul>
  <li>Homme</li>
  <li>Femme</li>
</ul>
<p>En fonction de l'âge et du genre afficher la phrase correspondante :</p>
<ul>
  <li>Vous êtes un homme et vous êtes majeur</li>
  <li>Vous êtes un homme et vous êtes mineur</li>
  <li>Vous êtes une femme et vous êtes majeur</li>
  <li>Vous êtes une femme et vous êtes mineur</li>
</ul>
<p><?= $result ?></p>
<?php
include '../footer.php';
?>
