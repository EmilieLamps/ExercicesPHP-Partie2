<?php
$page = "Exercice 1"; // Définir la variable pour changer le titre !
$age = 28;
$message = '';
include '../header.php';
 ?>
 <h2 class="text-primary text-center pt-5 pb-5 font-weight-bold">Exercice 1</h2>
 <h3 class="text-center pb-5">Créer une variable age et l'initialiser avec une valeur.
Si l'âge est supérieur ou égale à 18, afficher Vous êtes majeur. Dans le cas contraire, afficher Vous êtes mineur.</h3>
<?php
  if ($age >=18) {
    $message = "Vous êtes majeur";
  }
  else {
    $message = "Vous êtes mineur";
  }
?>
<p><?= $message ?></p>
<?php
include '../footer.php';
?>
