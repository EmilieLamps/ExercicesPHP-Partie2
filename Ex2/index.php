<?php
$page = "Exercice 2"; // Définir la variable pour changer le titre !
$isEasy = true;
$message ='';
include '../header.php';
 ?>
 <h2 class="text-primary text-center pt-5 pb-5 font-weight-bold">Exercice 2</h2>
 <h3 class="text-center pb-5">Créer une variable isEasy de type booléan et l'initialiser avec une valeur.
Afficher C'est facile!! si c'est vrai. Dans le cas contraire afficher C'est difficile !!!.
Bonus : L'écrire de deux manières différentes.</h3>
<?php
if ($isEasy) {
  $message = 'C\'est facile !!';
}
else {
  $message = 'C\'est difficile !!!';
}
?>
<p><?= $message ?></p>
<?php
include '../footer.php';
?>
