<?php
$page = "exercice3";
include '../header.php';
?>
<p>Créer deux variables age et gender. La variable gender peut prendre comme valeur :
<ul>
  <li>Homme</li>
  <li>Femme</li>
</ul>
</p>
<p>En fonction de l'âge et du genre afficher la phrase correspondante :
  <ul>
    <li>Vous êtes un homme et vous êtes majeur</li>
    <li>Vous êtes un homme et vous êtes mineur</li>
    <li>Vous êtes une femme et vous êtes majeur</li>
    <li>Vous êtes une femme et vous êtes mineur</li>
</p>
<?php
$age = 156;
$gender = "femme";
if (($gender == "femme" OR $gender == "homme") AND $age >= 18) {
  echo 'Vous êtes un '.$gender.' et vous êtes majeur';
}
elseif (($gender == "homme" OR $gender =="femme") AND $age <= 18) {
  echo 'Vous êtes un '.$gender.' et vous êtes mineur';
}
 ?>
<?php
include '../footer.php';
 ?>
