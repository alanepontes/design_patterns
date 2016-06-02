<?php

  include('PriceCalculator.php');

  class EuropePriceStrategy implements PriceCalculator
  {
    public function applyDiscounts($price)
    {
        return -5;
    }

    public function addTaxes($price)
    {
        return 5;
    }

    public function convertCurrency($price)
    {
        return $price*0.70;
    }
  }


?>