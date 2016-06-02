<?php

/**
 * Description of HighDiscountStrategy
 *
 * @author alane
 */
class HighDiscountStrategy implements Discount {
    
    public function applyDiscount($bill) {
        return $bill*0.70;
    }

    public function getDiscount() {
        return 0.70;
    }

}
