<?php
$page = "Exercice 8"; // Définir la variable pour changer le titre !
$isOk = true;
$message = '';
  if ($isOk) {
    $message = 'c\'est ok !!';
  }
  else {
    $message = 'c\'est pas bon !!!';
  }
include '../header.php';
 ?>
 <h2 class="text-primary text-center pt-5 pb-5 font-weight-bold">Exercice 8</h2>
 <h3 class="text-center pb-5">
Traduire ce code avec des if et des else :
  <!-- echo ($isOk) ? 'c'est ok !!' : 'c'est pas bon !!!'; -->
</h3>
<p><?= $message ?></p>
<?php
include '../footer.php';
?>
