<?php


/**
 * Description of LowDiscountStrategy
 *
 * @author alane
 */
class LowDiscountStrategy implements Discount {
    
    public function applyDiscount($bill) {
        return $bill*0.20;
    }

    public function getDiscount() {
        return 0.20;
    }

}
