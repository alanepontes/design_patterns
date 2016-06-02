<?php
  
  class TotalPriceCalculator
  {

    private $priceCalculator;
    private $price;

    public function setPriceCalculator(PriceCalculator $priceCalculator)
    {
      $this->priceCalculator = $priceCalculator; 
    }

    public function getPriceCalculator()
    {
      return $this->priceCalculator;
    }

    public function setPrice($price)
    {
      $this->price = $price;
    }

    public function getPrice()
    {
     return $this->price;
    }
    
    public function calcule()
    {
        $this->price += $this->priceCalculator->applyDiscounts($this->price);
        $this->price += $this->priceCalculator->addTaxes($this->price);
        
        return $this->priceCalculator->convertCurrency($this->price);
    }
  }

?>