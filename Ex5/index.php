<?php
$page = "Exercice 5"; // Définir la variable pour changer le titre !
$gender = false;
$message = ' ';
if (!$gender) {
  $message = 'C\'est une développeuse !!!';
}
else {
  $message = 'C\'est un développeur !!!';
}
include '../header.php';
 ?>
 <h2 class="text-primary text-center pt-5 pb-5 font-weight-bold">Exercice 5</h2>
 <h3 class="text-center pb-5">Traduire ce code avec des if et des else :
   <!-- Ternaire -->
<!-- echo ($gender != 'Homme') ? 'C\'est une développeuse !!!' : 'C\'est un développeur !!!';-->
</h3>
<p><?= $message ?></p>
<?php
include '../footer.php';
?>
