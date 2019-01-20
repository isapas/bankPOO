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

		public function getAccountName() {
			return $this->accountName;
		}
		public function getBalance() {
			return $this->balance;
		}

		public function deposit(int $amount) {
			$newBalance = $this->getBalance() + $amount;
			$this->setBalance($newBalance);
		}

		public function withdrawal(int $amount) {
			$newBalance = $this->getBalance() - $amount;
			$this->setBalance($newBalance);
		}

		/*public function transfer(int $amount) {
			$newBalance = $this->getBalance() + $amount;
			$this->setBalance($newBalance);
		}*/


		public function getNewBalance() {
			return $this->$newBalance;
		}

		public function __construct(array $data = NULL) {
			if($data) {
				$this->hydrate($data);
			}
		}
	}

 ?>
