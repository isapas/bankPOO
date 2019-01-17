<?php

	include "template/header.php";
	?>

	 <div class="container">
      <table class="table table-hover">
        <thead class="thead-light">
          <tr>
            <th scope="col-2" class="d-none d-md-table-cell text-center">Id</th>
            <th scope="col-2" class="d-none d-md-table-cell text-center">Nom du compte</th>
            <th scope="col-2" class="d-none d-md-table-cell text-center">Solde</th>
            <th scope="col-2" >Supprimer le compte</th>
          </tr>
        </thead>
        <?php

        //récupère toutes les entrées de la table Account
        //affiche les données sur chaque entrée dans le tableau
          foreach ($accounts as $key => $value) { 
          	var_dump($value);
         ?>
        <tbody>
          <tr>
            <td class="d-none d-md-table-cell text-center"><?php echo $value->getId(); ?></td>
            <td class="d-none d-md-table-cell text-center"><?php ?></td>
            <td class="d-none d-md-table-cell text-center"><?php ?></td>
            <td>
              <div>
                <a <?php setHref('') ?> class='btn btn-primary btn-xs text-center <?php ?> ' > Supprimer</a>
              </div>
            </td>
          </tr>
        <?php
          }
          ?>
        </tbody>
      </table>
    </div>
<?php

	include "template/footer.php";

 ?>
