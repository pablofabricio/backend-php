<?php 
// WITHDRAW OPERATION 

class osController extends mainController {
    
    public function index() {
        $this->loadData();
        $this->loadTemplate('header', $this->data);
		$this->loadView('withdraw/homeWithdraw', $this->data);
		$this->loadTemplate('footer', $this->data);
    } 

    //the param gets the value to withdraw
    public function operation($value){

        $this->loadData();
        extract($this->data);
        floatval($value);

        // if account = poupança = taxa de descontro = 0.8
        // e limite de saque = 1000
        if($account1->type == 'Poupança') {
            $balance = $account1->balance - 0.8;
            if($value > $balance || $value > 1000 ) {
                echo "<script> alert(' O valor Escolhido excede seu saldo. Escolha um valor menor.'); </script>";
                header("refresh:0; http://localhost/backend-php/os");
            } else {
                $s = $balance - $value;
                echo "<script> alert('Operação realizada com sucesso. seu saldo atual é: ".$s."'); </script>";
                header("refresh:0; http://localhost/backend-php");
            }
        
        // else  = corrente = taxa de descontro = 2.5
        // e limite de saque = 600
        } else {
            if($account1->type == 'Corrente') {
                $balance = $account1->balance - 2.5;
                if($value > $balance || $value > 600) {
                    echo "<script> alert(' O valor Escolhido excede o valor de saque por acesso ou é superior ao seu saldo. Escolha um valor menor.'); </script>";
                    header("refresh:0; http://localhost/backend-php/os");
                } else {
                    $s = $balance - $value;
                    echo "<script> alert('Operação realizada com sucesso. seu saldo atual é: ".$s."'); </script>";
                    header("refresh:0; http://localhost/backend-php");
                }
            }
        }
    }
}