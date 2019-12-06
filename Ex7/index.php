<?php
$page = "Exercice 7"; // Définir la variable pour changer le titre !
$isOk = false;
$message = '';
include '../header.php';
 ?>
 <h2 class="text-primary text-center pt-5 pb-5 font-weight-bold">Exercice 7</h2>
 <h3 class="text-center pb-5">Traduire ce code avec des if et des else :
  <!-- echo ($isOk == false) ? 'c\'est pas bon !!!' : 'c\'est ok !!'; -->
</h3>
<?php
if (isOk == false) {
  $message = 'c\'est pas bon !!!';
}
else {
  $message = 'c\'est ok !!';
}
?>
<p><?= $message ?></p>
<?php
include '../footer.php';
?>
