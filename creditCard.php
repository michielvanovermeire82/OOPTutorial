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
        if($spendingMoney -= $this->getTotalBalance($this->totalBalance)){
            $remBalance = $spendingMoney - $this->getTotalBalance($this->totalBalance);
            $this->setTotalBalance($remBalance);
            echo "You have spent" . $spendingMoney . "and your remaning balance is " . $remBalance . ".";
        } else{
            echo " You dont have enough balance in your account";
        }
    } else {
        echo "Your carnd number or pin is invalid";
    }
}
}

$creditcard = new CreditCard();
$creditcard->setPin(4321);
$creditcard->shopping(1111222233334444, 4321, 550);
