<?php


	class Account extends entity {

		protected $accountName;
		protected $balance;



		public function setAccountName( $accountName) {
			$this->accountName = $accountName;
		}
		public function setBalance(int $balance) {
			$this->balance = $balance;
		}

		//dans le manager?

		public function getAccountName() {
			return $this->accountName;
		}
		public function getBalance() {
			return $this->balance;
		}



		public function __construct(array $data = NULL) {
			if($data) {
				$this->hydrate($data);
			}
		}
	}

 ?>
