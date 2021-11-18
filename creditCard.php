<?php

class CreditCard {

const CARDNUMBER = 1111222233334444;
private $totalBalance = 1000;
private $pinNumber = 1234;

public function getCardNumber(){
    return self::CARDNUMBER;
}

public function getTotalBalance(){
    return $this->totalBalance;
}

private function setTotalBalance($balance){
    $balance = $this->totalBalance;
}

public function setPin($newPin){
    if(preg_match("/^[1-9]\d{3}$/", $newPin)){
         $newPin = $this->pinNumber;
    }else{
        echo "Pin number should be a string of 4 digits and first digit should not be zero,";

    }
}

public function getPin(){
    return $this->pinNumber;
}

public function shopping($cardNumber, $pinNumber, $spendingMoney){
    if($cardNumber === $this->getCardNumber() && $pinNumber === $this->getPin()){
        if($spendingMoney <= $this->getTotalBalance($this->totalBalance)){
            $remBalance = $this->getTotalBalance($this->totalBalance) - $spendingMoney;
            $this->setTotalBalance($remBalance);
            echo "You have spent " . $spendingMoney . " and your remaning balance is " . $remBalance . ".";
        } else{
            echo " You don't have enough balance in your account!";
        }
    } else {
        echo "Your card number or pin is invalid!";
    }
}

public function withdrawMoney($cardNumber, $pinNumber, $withdrawMoney){
    if($cardNumber === $this->getCardNumber() && $pinNumber === $this->getPin()){
        $withdrawMoney = $withdrawMoney + $withdrawMoney * (3/100);
        if($withdrawMoney <= $this->getTotalBalance($this->totalBalance)){
            $remBalance = $this->getTotalBalance($this->totalBalance) - $withdrawMoney;
            $this->setTotalBalance($remBalance);
            echo "You have withdrawn " . $withdrawMoney . " and your remaning balance is " . $remBalance . ".";
        } else {
            echo " You don't have enough balance in your account!";
         }    
    } else {
        echo "Your card number or pin is invalid!";
    }
}

}

$creditcard = new CreditCard();
$creditcard->setPin(4321);
$creditcard->withdrawMoney(1111222233334444, 1234, 100);
