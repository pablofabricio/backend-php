<?php
class mainController extends controller {

	public $data = array();
	
	//this method will work as a database.
	public function loadData() {
		$account1 = new Account(1, 'Poupança', 1000);
		$account2 = new Account(2, 'Poupança', 500);
		$account3 = new Account(3, 'Poupança', 500);

		$account4 = new Account(4, 'Corrente', 1500);
		$account5 = new Account(5, 'Corrente', 800);
		$account6 = new Account(6, 'Corrente', 400);

		$this->data['account1'] = $account1;
		$this->data['account2'] = $account2;
		$this->data['account3'] = $account3;
		$this->data['account4'] = $account4;
		$this->data['account5'] = $account5;
		$this->data['account6'] = $account6;

		//sorteando alguma conta para logar
		$num = rand(1, 5);
		$this->data['logged'] = $this->data['account'.$num];
	}
	
	public function index() {

		$this->loadData();
		$this->loadTemplate('header', $this->data);
		$this->loadView('home', $this->data);
		
		
	}

	public function deposit(){
		$this->loadData();
		$this->loadTemplate('header', $this->data);

	}

}