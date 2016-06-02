<?php

/**
 * Description of NoDiscountStrategy
 *
 * @author alane
 */
class NoDiscountStrategy implements Discount {
    
    public function applyDiscount($bill) {
        return $bill;
    }

    public function getDiscount() {
        return 0;
    }

}
