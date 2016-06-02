<?php
  include('TotalPriceCalculator.php');
  include('BrazilPriceStrategy.php');

  $calculator = new TotalPriceCalculator();
  $calculator->setPrice(10);
  $calculator->setPriceCalculator(new BrazilPriceStrategy());
  echo $calculator->calcule();
  
?>