<?php

  include('PriceCalculator.php');

  class BrazilPriceStrategy implements PriceCalculator
  {
    
    
    public function applyDiscounts($price)
    {
        return -10;
    }

    public function addTaxes($price)
    {
        return 10;
    }

    public function convertCurrency($price)
    {
        return $price*0.5;
    }
  }


?>