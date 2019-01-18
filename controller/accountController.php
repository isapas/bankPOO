<?php 

class accountController {
	function showAccount() {
		//instancie le manager qui permet de gérer la table
		$accountManager = new accountManager();
		//récupère un tableau pour instancier les objets chats qui seront affichés dans la vue
		$accounts = $accountManager->getAccounts();

	require "view/accountView.php";
	}	
}



 ?>