<?php

class accountController {
	function showAccount() {
		//instancie le manager qui permet de gérer la table
		$accountManager = new accountManager();
		//récupère un tableau pour instancier les objets chats qui seront affichés dans la vue
		$accounts = $accountManager->getAccounts();
		var_dump($accounts);
	require "view/accountView.php";
	}
}




//Fonction pour ajouter un chat, elle attend explicitement un objet chat et non pas un tableau
public function addAccount(Account $account) {
	$query = $this->getDb()->prepare("INSERT INTO Account(accountName, balance) VALUES(:accountName, :balance)");
	$result = $query->execute([
		"accountName" => $account->getAccountName(),
		"balance" => $account->getBalance()
	]);
	return $result;
}

function __construct()
{
	$this->setDb(dataBase::BD());
}




 ?>
