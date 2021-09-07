<?php
class Product{
    private string $name;
    private float $price;
    private int $amount;

    public function __construct(string $name, float $price, int $amount)
    {
        $this->name = $name;
        $this->price = $price;
        $this->amount = $amount;
    }

    public function printProduct(): string
    {
        return "{$this->name} {$this->price} {$this->amount} ";
    }

    public function setPrice(float $price) : void
    {
        $this->price = $price;
    }

    public function setAmount(int $amount) : void
    {
        $this->amount = $amount;
    }

}



$products = [
    new Product("Logitech mouse", 70.00, 14),
    new Product("iPhone 5s", 999.99, 3),
    new Product("Epson EB-U05", 440.46, 1)
];

foreach ($products as $product){
    echo $product->printProduct() . PHP_EOL;
}

echo "====================================================" . PHP_EOL;


$products[0]->setAmount(5);
$products[1]->setPrice(750.00);



foreach ($products as $product){
    echo $product->printProduct() . PHP_EOL;
}


















