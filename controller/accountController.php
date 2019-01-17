<?php 

class accountController {
	function showAccount() {
		getAccount($data);
		var_dump($data);
	require "view/accountView.php";
	}	
}



 ?>