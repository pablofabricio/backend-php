<?php

// DEPOSIT OPERATION


class odController extends mainController {
    
    public function index(){
		$this->loadData();
		$this->loadTemplate('header', $this->data);
		$this->loadView('deposit/homeDeposit', $this->data);
		$this->loadTemplate('footer', $this->data);

    }

    public $soma = 0;

    //first param gets the deposit value 
    //sec param gets the destination account 
    
    public function operation($value, $ac = 0){
        // receiving the deposit value
        $this->data['value'] = $value;

        $this->loadData();
        $this->loadTemplate('header', $this->data);
        $this->loadView('deposit/account', $this->data);
        $this->loadTemplate('footer', $this->data);
        
        //receiving the account
        if ($ac != 0) {
            extract($this->data);

            floatval($value);

            //knowing who account will receives the changes
            // and after to change the account balance.

            // conta poupança = 0.80 de desconto por operação
            if($ac == 1) {
                $this->soma = $account1->balance + $value - 0.8;

            } else if($ac == 2) {
                $this->soma = $account2->balance + $value - 0.8;

            } else if($ac == 3) {
                $this->soma = $account3->balance + $value - 0.8;

            //conta corrente = 2.50 de descontro por operação
            } else if($ac == 4) {
                $this->soma = $account4->balance + $value - 2.5;
            } else if($ac == 5) {
                $this->soma = $account5->balance + $value - 2.5;
            } else if($ac == 6) {
                $this->soma = $account6->balance + $value - 2.5;
            }

            echo "<script> alert('Operação realizada com sucesso.'); </script>";
            header("refresh:0; http://localhost/backend-php");
        }
    }
}