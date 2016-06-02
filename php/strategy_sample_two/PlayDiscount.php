<?php

include('ShoppingMail.php');
include('HighDiscountStrategy.php');
include('NoDiscountStrategy.php');
include('LowDiscountStrategy.php');
include('TimeUtils.php');

/**
 * Description of PlayDiscount
 *
 * @author alane
 */
class PlayDiscount {
    public static function main() {
        
        $shoppingMail = new ShoppingMail();
        $shoppingMail->setBill(100);

        //print_r(get_declared_classes());

        switch (TimeUtils::getWeekDay()) {
            case "Monday":
                $shoppingMail->setCurrentDiscount(new HighDiscountStrategy());
                break;

            case "Thursday":
                $shoppingMail->setCurrentDiscount(new LowDiscountStrategy());
                break;
            default:
                $shoppingMail->setCurrentDiscount(new NoDiscountStrategy());
        }

        print $shoppingMail->getBill().'<br>';
        print TimeUtils::getWeekDay().'<br>';
        print $shoppingMail->getCurrentDiscount()->getDiscount().'<br>';
        print $shoppingMail->getFinalBill().'<br>';
    }
}

