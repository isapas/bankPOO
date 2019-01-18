<?php 

	class AccountManager extends manager {

		public function getAccounts() {
			$query = $this->getDb()->query('SELECT * FROM Account');
			$data = $query->fetchAll(PDO::FETCH_CLASS, "Account");
			/*$data = $query->fetchall(PDO::FETCH_ASSOC);
				foreach($data as $key => $account) {
					$data[$key] = new Account($account);*/
					$query->closeCursor();
					return $data;
			}
		}

 ?>
