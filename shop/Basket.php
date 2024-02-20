<?php
class Basket{
    public string $productName;
    public float $productPrice;
    public float $productTaxation;
    public int $productQte;

    public function __construct(string $productName, float $productPrice, float $productTaxation, int $productQte){
        $this -> productName = $productName;
        $this -> productPrice = $productPrice;
        $this -> productTaxation = $productTaxation;
        $this -> productQte = $productQte;
    }

    public function setTaxes(){
        $priceTVAC = $this->productPrice + ($this->productPrice * (1 + $this->productTaxation));
        return ($priceTVAC);
    }

    static function getTotalPrice(array $basket){
        $totalPrice = 0;

        foreach ($basket as $productItem){
            $totalPrice += ($productItem->setTaxes())*$productItem->productQte;
        }
        return($totalPrice);
    }
};

$item1 = new Basket("Bananas", 1, 0.06, 6);
$item2 = new Basket("Apples", 1.5, 0.06, 3);
$item3 = new Basket("Wines bottles", 10, 0.21, 2);

$basket = [$item1, $item2, $item3];
$totalPrice = Basket::getTotalPrice($basket);

echo "total price is = " . $totalPrice . " €";