<?php
//01
class Company
{
    public $name;
    public $owner;
    public function __construct($name, $owner)
    {
        $this->name = $name;
        $this->owner = $owner;
    }
    public function show()
    {
        echo "Name is : $this->name\nOwner is : $this->owner";
    }
}
$obj = new Company('Facebook', 'Mark Zuckerberg');
// $obj->show();

//02
class CompanyDetails
{
    public $name;
    public $owner;
    public function info($name, $owner)
    {
        $this->name = $name;
        $this->owner = $owner;
        echo "Company name is : $this->name\nCompany owner is : $this->owner\n";
    }
}
$CompanyDetails = new CompanyDetails();
// $CompanyDetails->info('Facebook', 'Mark Zuckerberg');
// $CompanyDetails->info('Whatsapp', 'Meta');
// $CompanyDetails->info('Ali Baba', 'Jack Maa');


//03
class Shopping
{
    public $total;
    public $discount;
    public function __construct($total, $discount)
    {
        $this->total = $total;
        $this->discount = $discount;
    }
    public function show()
    {
        echo "This Subtotal Is : " . $this->total - $this->discount;
    }
}
$obj = new Shopping(550, 50);
// $obj->show();

//04 shipping cost
class Shoppings
{
    public $total;
    public $shipping;
    public $discount;

    public function show($total, $shipping, $discount)
    {
        $this->total = $total;
        $this->shipping = $shipping;
        $this->discount = $discount;
        echo "This subtotal is : " . $this->total + $this->shipping - $this->discount;
    }
}
$shoppings = new shoppings();
$shoppings->show(1000, 150, 100);
