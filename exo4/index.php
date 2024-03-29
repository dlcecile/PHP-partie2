<?php
  $page = 'exercice4';
  include '../header.php';
  $result = '';
  $magnitude = 10;
  // Indique sur quelle variable je travaille
  switch ($magnitude){
    case 1: // dans le cas où $magnitude vaut 1
    $result = 'Micro-séisme impossible à ressentir.';
    break;
    case 2:
    $result = 'Micro-séisme impossible à ressentir mais enregistrable par les sismomètres.';
    break;
    case 3:
    $result = 'Ne cause pas de dégats mais commence à pouvoir être légèrement ressenti.';
    break;
    case 4:
    $result = 'Séisme capable de faire bouger des objets mais ne causant généralement pas de dégats.';
    break;
    case 5:
    $result = 'Séisme capable d\'engendrer des dégats importants sur de vieux bâtiments ou bien des bâtiments présentants des défauts de construction. Peu de dégats sur des bâtiments modernes.';
    break;
    case 6:
    $result = 'Fort séisme capable d\'engendrer des destructions majeures sur une large distance (180 km) autour de l\'épicentre.';
    break;
    case 7:
    $result = 'Séisme capable de destructions majeures à modérées sur une très large zone en fonction de la distance.';
    break;
    case 8:
    $result = 'Séisme capable de destructions majeures sur une très large zone de plusieurs centaines de kilomètres.';
    break;
    case 9:
    $result = 'Séisme capable de tout détruire sur une très vaste zone.';
    break;
    default:
    $result = 'Désolé, je n\'ai pas de message à afficher pour cette magnitude';
  }
?>
<p>L'échelle de Richter est un outil de mesure qui permet de définir la magnitude de moment d'un tremblement de terre. </p>
<p>Cette échelle va de 1 à 9.Créer une variable magnitude. Selon la valeur de magnitude, afficher la phrase correspondante.</p>
<p><?= $result ?></p>
<?php
  include '../footer.php';
?>
