<?php

	class AccountManager extends manager {

		public function getAccounts() {
			$query = $this->getDb()->query('SELECT * FROM Account');
			$data = $query->fetchAll(PDO::FETCH_CLASS, "Account");
			/*$data = $query->fetchall(PDO::FETCH_ASSOC);
				foreach($data as $key => $account) {
					$data[$key] = new Account($account);}*/
		$query->closeCursor();


			return $data;
<<<<<<< HEAD
		}

		$accountManager = new accountManager();

=======
	}
>>>>>>> bc28d8e5a3f7711d8c94565c9a17f93c1d1d2543
		//Fonction pour ajouter un compte, elle attend explicitement un objet compte et non pas un tableau
		public function addAccount(Account $account) {
			$query = $this->getDb()->prepare("INSERT INTO Account(accountName, balance) VALUES(:accountName, :balance)");
			$result = $query->execute([
				"accountName" => $account->getAccountName(),
				"balance" => $account->getBalance()
			]);
			return $result;
			var_dump($account);
		}
<<<<<<< HEAD
	}

=======

}
>>>>>>> bc28d8e5a3f7711d8c94565c9a17f93c1d1d2543

 ?>
