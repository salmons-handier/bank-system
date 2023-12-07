<?php
require_once 'customer.php';

class Account {
    private $customer;
    private $balance;

    public function __construct(Customer $accountHolder, $initialBalance) {
        $this->customer = $accountHolder;
        $this->balance = $initialBalance;
    }

    public function getCustomer() {
        return $this->customer;
    }

    public function getBalance() {
        return $this->balance;
    }
}
?>
