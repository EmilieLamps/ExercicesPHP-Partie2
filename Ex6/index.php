<?php
$page = "Exercice 6"; // Définir la variable pour changer le titre !
$age = 18;
$message = '';
include '../header.php';
 ?>
 <h2 class="text-primary text-center pt-5 pb-5 font-weight-bold">Exercice 6</h2>
 <h3 class="text-center pb-5">Traduire ce code avec des if et des else :
  <!-- echo ($age >= 18) ? 'Tu es majeur' : 'Tu n\'es pas majeur'; -->
</h3>
<?php
if ($age >= 18) {
  $message = 'Tu es majeur';
}
else {
  $message = 'Tu n\'es pas majeur';
}
?>
<p><?= $message ?></p>
<?php
include '../footer.php';
?>
