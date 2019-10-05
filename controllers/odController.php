<?php
class odController extends mainController {
    
    public function index(){
		$this->loadData();
		$this->loadTemplate('header', $this->data);
		$this->loadView('deposit/homeDeposit', $this->data);
		$this->loadTemplate('footer', $this->data);

    }

    public function operation($aux){
        //receiving the deposit value
        $value = $aux;

        $this->loadData();
		$this->loadTemplate('header', $this->data);
		$this->loadView('deposit/account', $this->data);
		$this->loadTemplate('footer', $this->data);
        
        if (isset($value) && !empty($value)){
            $receiver = $aux;
            
            extract($this->data);

            if (isset($receiver) && !empty($receiver)) {
                //knowing who account will receives the changes
                // and after to change the account balance.
                if($receiver = 1) {
                    $account1->balance + $value;
                    echo "opa";
                } else if($receiver = 2) {
                    $account2->balance + $value; 
                } else if($receiver = 3) {
                    $account3->balance + $value; 
                } else if($receiver = 4) {
                    $account4->balance + $value; 
                } else if($receiver = 5) {
                    $account5->balance + $value; 
                } else if($receiver = 6) {
                    $account6->balance + $value; 
                }
            }
         
        }
    }
}