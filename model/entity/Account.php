<?php

<<<<<<< HEAD:model/entity/account.php
	class Account extends entity
=======
	class account extends entity 
>>>>>>> master:model/entity/Account.php
	{
		// protected $id;
		protected $accountName;
		protected $balance;


<<<<<<< HEAD:model/entity/account.php
		// public function setId(int $id) {
		// 	$this->id =$id;
		// }
=======

>>>>>>> master:model/entity/Account.php
		public function setAccountName(string $accountName) {
			$this->accountName = $accountName;
		}
		public function setBalance(int $balance) {
			$this->balance = $balance;
		}

		//dans le manager?
<<<<<<< HEAD:model/entity/account.php
		// public function getId() {
		// 	$this->id;
		// }
=======
	
>>>>>>> master:model/entity/Account.php
		public function getAccountName() {
			$this->accountName;
		}
		public function getBalance() {
			$this->balance;
		}



		public function __construct(array $data = NULL) {
			if($data) {
				$this->hydrate($data);
			}
		}
	}

 ?>
