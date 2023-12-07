<?php
class Customer {
    private $name;

    public function __construct($customerName) {
        $this->name = $customerName;
    }

    public function getName() {
        return $this->name;
    }
}
?>
