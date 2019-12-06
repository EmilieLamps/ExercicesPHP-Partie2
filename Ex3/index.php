<?php
$page = "Exercice 3";
$age = 18;
$gender = true;
include '../header.php';
 ?>
 <h2 class="text-primary text-center pt-5 pb-5 font-weight-bold">Exercice 3</h2>
 <h3 class="text-center pb-5">Créer deux variables age et gender. La variable gender peut prendre comme valeur :
    Homme
    Femme
En fonction de l'âge et du genre afficher la phrase correspondante :
    Vous êtes un homme et vous êtes majeur
    Vous êtes un homme et vous êtes mineur
    Vous êtes une femme et vous êtes majeur
    Vous êtes une femme et vous êtes mineur
Gérer tous les cas.</h3>
<?php
if ($age >=18 AND $gender) {
  echo "Vous êtes une femme et vous êtes majeur";
}
elseif ($age <18 AND $gender) {
  echo "Vous êtes une femme et vous êtes mineur";
}
elseif ($age >=18 AND !$gender) {
  echo "Vous êtes un homme et vous êtes majeur";
}
else {
  echo "Vous êtes un homme et vous êtes mineur";
}
include '../footer.php';
?>
