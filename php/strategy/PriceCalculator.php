<?php

  interface PriceCalculator
  {

    public function applyDiscounts($price);
    public function addTaxes($price);
    public function convertCurrency($price);
  }

?>