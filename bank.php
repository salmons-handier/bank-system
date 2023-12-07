<?php
require_once 'customer.php';
require_once 'account.php';
require_once 'transaction.php';

class Bank {
    private $name;
    private $customers = [];
    private $accounts = [];
    private $transactions = [];

    public function __construct($bankName) {
        $this->name = $bankName;
    }

    public function addCustomer(Customer $customer) {
        $this->customers[] = $customer;
    }

    public function createAccount(Customer $customer, $initialBalance) {
        $account = new Account($customer, $initialBalance);
        $this->accounts[] = $account;
    }

    public function processTransaction(Transaction $transaction) {
        $this->transactions[] = $transaction;
    }

    public function displayCustomers() {
        foreach ($this->customers as $customer) {
            echo "Customer: " . $customer->getName() . "\n";
        }
    }

    public function displayAccounts() {
        foreach ($this->accounts as $account) {
            echo "Account Holder: " . $account->getCustomer()->getName() .
                 ", Balance: $" . $account->getBalance() . "\n";
        }
    }

    public function displayTransactions() {
        foreach ($this->transactions as $transaction) {
            echo "Transaction: " . $transaction->getType() .
                 ", Amount: $" . $transaction->getAmount() . "\n";
        }
    }

    public function run() {
        // Your banking system logic goes here
    }
}
?>
