<?php 

// TRANSFER OPERATION

class otController extends mainController {

    public function index() {
        $this->loadData();
        $this->loadTemplate('header', $this->data);
		$this->loadView('transfer/homeTransfer', $this->data);
		$this->loadTemplate('footer', $this->data);
    }

    //first param gets the deposit value 
    //sec param gets the destination account 
    public function operation($value, $ac = 0) {
        $this->loadData();
        extract($this->data);

        //checking if the logged account has enough balance to execute the transfer
        if($value > $account1->balance - 0.8) {
            echo "<script> alert('O valor Escolhido excede seu saldo. Escolha um valor menor.'); </script>";
            header("refresh:0; http://localhost/backend-php/ot");
        }
        // receiving the transfer value
        $this->data['value'] = $value;

        $this->loadTemplate('header', $this->data);
        $this->loadView('transfer/account', $this->data);
        $this->loadTemplate('footer', $this->data);

        //receiving the destination account 
        if ($ac != 0) {
            extract($this->data);

            floatval($value);

            $calcBalance = 0;

            //knowing who account will receives the changes
            // and then to alter the account balance.
            
            //poupança = desconto por operação = 0.8;
            if($ac == 2) {
                //adding value to destination account
                $account2->balance = $account2->balance + $value;

                //discounting transfer to logged account
                $calcBalance = $account1->balance - $value - 0.8; 
            } else if($ac == 3) {
                $account3->balance = $account3->balance + $value;
                $calcBalance = $account1->balance - $value - 0.8; 
            }
            // corrente = desconto por operação = 2.5;
            else if($ac == 4) {
                $account4->balance = $account4->balance + $value;
                $calcBalance = $account1->balance - $value - 2.5; 
            } else if($ac == 5) {
                $account5->balance = $account5->balance + $value;
                $calcBalance = $account1->balance - $value - 2.5; 
            } else if($ac == 6) {
                $account6->balance = $account6->balance + $value;
                $calcBalance = $account1->balance - $value - 2.5; 
            }
            
            echo "<script> alert('Operação realizada com sucesso. seu saldo atual é: ".$calcBalance."'); </script>";
            header("refresh:0; http://localhost/backend-php");

        }
    }
}