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
		}

		public function getAccount($id) {
			$query = $this->getDb()->prepare('SELECT * FROM Account WHERE id = ?');
			$query->execute([$id]);
			$query->setFetchMode(PDO::FETCH_CLASS, "Account");
			$data = $query->fetch();
			/*$data = $query->fetchall(PDO::FETCH_ASSOC);
				foreach($data as $key => $account) {
					$data[$key] = new Account($account);}*/
			$query->closeCursor();
			return $data;
		}


		//Fonction pour ajouter un compte, elle attend explicitement un objet compte et non pas un tableau
		public function addAccount(Account $account) {
			$query = $this->getDb()->prepare("INSERT INTO Account(accountName, balance) VALUES(:accountName, :balance)");
			$result = $query->execute([
				"accountName" => $account->getAccountName(),
				"balance" => $account->getBalance()
			]);
			$query->closeCursor();
			return $result;
			// var_dump($account);
		}
<<<<<<< HEAD

		//Fonction pour updater un compte
		public function updateAccount(Account $account) {
			$query = $this->getDb()->prepare("UPDATE Account SET accountName =:accountName, balance = :balance WHERE id = :id");
			$result = $query->execute([
				"accountName" => $account->getAccountName(),
				"balance" => $account->getBalance(),
				"id" => $account->getId()
			]);
			$query->closeCursor();
			return $result;
		}





		public function delAccountById($id) {
			$query = $this->getDb()->prepare('DELETE FROM Account WHERE id = ?');
			$result = $query->execute(array($id));
			return $result;
		}

		
	}


 ?>
