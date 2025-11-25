<?php

//!Syntax for creating a class
class ClassName
{
    //
}

//!Creating a object from class
// class BankAccount
// {
//     public $accountNumber;
//     public $balance;
// }
// $account = new BankAccount();

// $account ->accountNumber = 1;
// $account->balance=100;

// echo "The bank account $account->accountNumber has a balance of $$account->balance";


//!Add methods to a class 
//?syntax 

// class ClassName
// {
//     public function methodName(parameter_list){
//         //implementation
//     }
// }


class BankAccount 
{
    public $accountNumber;
    public $balance;

    public function deposit($amount)
    {
        if ($amount > 0){
            $this -> balance +=$amount;
        }
    }

    public function withdraw($amount)
    {
        if($amount<=$this->balance)
        {
            $this->balance-=$amount;
            return true;
        }
        return false;
    }
}

$account = new BankAccount();

$account ->accountNumber=1;
$account->balance=100;

$account->deposit(100);


echo "The bank account $account->accountNumber has a balance of $$account->balance";