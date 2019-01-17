<?php

	class Account extends entity
	{
		// protected $id;
		protected $accountName;
		protected $balance;



		public function setAccountName(string $accountName) {
			$this->accountName = $accountName;
		}
		public function setBalance(int $balance) {
			$this->balance = $balance;
		}

		//dans le manager?

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
