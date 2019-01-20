
<?php
class accountController {
	public function showAccount() {
		//instancie le manager qui permet de gérer la table
		$accountManager = new accountManager();
		//récupère un tableau pour instancier les objets chats qui seront affichés dans la vue
		$accounts = $accountManager->getAccounts();
		require "view/accountView.php";
	}
	public function addForm() {
		//On vérifie qu'un formulaire a été soumis
		if(!empty($_POST)) {
		//instancie le manager qui permet de egérer la table
			$accountManager = new accountManager();
 		 //On instancie un objet compte avec les données du formulaire
			$account = new Account($_POST);
 		 //On ajoute l'objet compte en base de données
			$accountManager->addAccount($account);
		}
		require "view/form/addAccountForm.php";
	}

	public function delAccount() {
		//j'instancie le manager qui permet d'instancier la table
		$accountManager = new accountManager();
		$accountManager->delAccountById($_GET['id']);
		redirectTo("");
	}

	public function makeDeposit() {
			$accountManager = new accountManager();
			$account = $accountManager->getAccount($_GET["id"]);
			if (!empty($_POST)) {
				$account->deposit($_POST["amount"]);
				$accountManager->updateAccount($account);
				//var_dump($account);
				redirectTo("");
			}
		require "view/form/depositForm.php";
	}

	public function makeWithdrawal() {
			$accountManager = new accountManager();
			$account = $accountManager->getAccount($_GET["id"]);
			if (!empty($_POST)) {
				$account->withdrawal($_POST["amount"]);
				$accountManager->updateAccount($account);
				//var_dump($account);
				redirectTo("");
			}
		require "view/form/withdrawalForm.php";
	}
		public function makeTransfer () {
			$accountManager = new accountManager();
			$account = $accountManager->getAccount($_GET["id"]);

		}


}

?>

