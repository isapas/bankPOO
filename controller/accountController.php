<?php

class accountController {
	function showAccount() {
		getAccount($data);
		var_dump($data);
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
}



 ?>
