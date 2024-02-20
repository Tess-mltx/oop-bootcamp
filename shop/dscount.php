<?php
class Basket{
    public string $productName;
    public float $productPrice;
    public float $productTaxation;
    public int $productQte;
    public string $productType;

    public function __construct(string $productName, float $productPrice, float $productTaxation, int $productQte, string $productType){
        $this -> productName = $productName;
        $this -> productPrice = $productPrice;
        $this -> productTaxation = $productTaxation;
        $this -> productQte = $productQte;
        $this -> productType = $productType;
    }
    
    public function setDiscount(){
        if ($this->productType == "Fruit"){
            $discountPrice = ($this->productPrice-(($this->productPrice/100)*50));
            echo "the discount price is : $discountPrice </br>";
            return($discountPrice);
        } else {
            return($this->productPrice);
        }
    }

    public function setTaxes(){
        $discountPrice = $this->setDiscount();
        $taxedPrice = $discountPrice * (1 + $this->productTaxation);
        echo "set taxes = $taxedPrice";
        return $taxedPrice;
    }

    static function getTotalPrice(array $basket){
        $totalPrice = 0;

        foreach ($basket as $productItem) {
            $taxedPrice = $productItem->setTaxes();
            $totalPrice += $taxedPrice * $productItem->productQte;
            echo "Prix TVAC $productItem->productName : $taxedPrice x $productItem->productQte = " . $taxedPrice*$productItem->productQte . "</br>";
        }

        return $totalPrice;
    }
};

$item1 = new Basket("Bananas", 1, 0.06, 6, "Fruit");
$item2 = new Basket("Apples", 1.5, 0.06, 3, "Fruit");
$item3 = new Basket("Wines bottles", 10, 0.21, 2, "Alcohol");

$basket = [$item1, $item2, $item3];
$totalPrice = Basket::getTotalPrice($basket);

echo "total price is = " . $totalPrice . " €";