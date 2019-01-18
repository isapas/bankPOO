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
						<th scope="col-2" class="d-none d-md-table-cell text-center">Dépot</th>
						<th scope="col-2" class="d-none d-md-table-cell text-center">Virement</th>
						<th scope="col-2" class="d-none d-md-table-cell text-center">Retrait</th>
            <th scope="col-2" >Supprimer le compte</th>
          </tr>
        </thead>
        <?php

        //récupère toutes les entrées de la table Account
        //affiche les données sur chaque entrée dans le tableau
          foreach ($accounts as $key => $account) {

         ?>
        <tbody>
          <tr>
            <td class="d-none d-md-table-cell text-center"><?php echo $account->getId(); ?> </td>
            <td class="d-none d-md-table-cell text-center"><?php echo $account->getAccountName(); ?></td>
            <td class="d-none d-md-table-cell text-center"><?php echo $account->getBalance();?></td>
						<td>
              <div>
                <a <?php setHref('deposit', ["id"=>$account->getId()]) ?> <i class="fas fa-plus-circle ml-5"></i> Dépot</a>
              </div>
            </td>
						<td>
              <div>
                <a <?php setHref('transfer') ?> <i class="fas fa-exchange-alt ml-5"></i> Virement</a>
              </div>
            </td>
						<td>
              <div>
                <a <?php setHref('withdrawal', ["id"=>$account->getId()]) ?> <i class="fas fa-minus-circle ml-4"></i> Retrait</a>
              </div>
            </td>
            <td>
              <div>
                <a <?php setHref('delAccount') ?> <i class="far fa-trash-alt text-danger ml-5"></i> Supprimer</a>
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
