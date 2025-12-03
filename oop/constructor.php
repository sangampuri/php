<?php 

class BankAccount {

    public $accountNumber , $balance ;

    public function __construct($account_num , $balen) {

        $this->accountNumber = $account_num;
        $this->balance = $balen;
    }

    public function show_balence() {
        $meroPaisa = $this -> balance ;
        echo "Mero account number : {$this->accountNumber}"."\n";
        echo "Mero paisa yeati $meroPaisa xa" ;
    }
    
}

$account1 = new BankAccount(1456272,99);

$account1 ->show_balence();


//! we can alo write the above code as below after php 8.0 update

// class BankAccount {


//     public function __construct(private $accountNumber ,private $balance) {
//     }

//     public function show_balence() {
//         echo "Mero account number : {$this->accountNumber}"."\n";
//         echo "Mero paisa yeati $this->balance xa" ;
//     }
    
// }
