<?php
class Transaction {
    private $type;
    private $amount;

    public function __construct($transactionType, $transactionAmount) {
        $this->type = $transactionType;
        $this->amount = $transactionAmount;
    }

    public function getType() {
        return $this->type;
    }

    public function getAmount() {
        return $this->amount;
    }
}
?>
