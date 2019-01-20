<?php
require "view/template/header.php";
?>


<h2 class="d-flex justify-content-center">Effectuer un virement</h2>
<form class="text-center mt-5 col-12 col-md-12 col-lg-8 mx-auto my-5" action="" method="post">
  <p>Nom du compte</p>
  <input type="text" name="accountName">
  <p>ID utilisateur</p>
  <input type="number" name="userId">
  <p>Balance</p>
  <input type="number" name="balance">
  <input type="submit" value="Envoyer">
</form>

<hr>


<?php
require "view/template/footer.php";
 ?>
