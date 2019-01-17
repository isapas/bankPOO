<?php 

	class AccountManager {
		protected $db;

		public function getAccount($data) {
			$query = $this->getDb()->query('SELECT * FROM Account');
			$data = $query->fetchall(PDO::FETCH_ASSOC);
				foreach($data as $key => $account) {
					$data[$key] = new Account($account);
				}
			return $data;
		}
		
	}

 ?>
