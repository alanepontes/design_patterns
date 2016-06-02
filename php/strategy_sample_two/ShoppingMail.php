<?php

include('Discount.php');

/**
 * Description of ShoppingMail
 *
 * @author alane
 */
class ShoppingMail {
    private $currentDiscount;
    private $bill;
    
    public function setCurrentDiscount(Discount $currentDiscount) {$this->currentDiscount = $currentDiscount; }
    public function getCurrentDiscount() {return $this->currentDiscount;}
    
    public function setBill($bill) {$this->bill= $bill; }
    public function getBill() {return $this->bill;}
    
    public function getFinalBill() {
        return ($this->bill - $this->currentDiscount->applyDiscount($this->bill));
    }
}
 