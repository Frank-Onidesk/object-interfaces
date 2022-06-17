<?php
declare(strict_types=1);
/*
 * Using interface on PHP
 * Interfaces allow us to pre-define witch function will need to create (public)
 * without define how methods should be builded
 * Franco@15June2022
 */
interface  IAutomobile{
    public function set_color(string $color);
    public function set_price(int|float $price);
    public function set_builder(string $builder);
}


/*
* a class can implement two interfaces wich define a method 
* with same name (and identical declaration in both)
*
*/
 class   Car implements IAutomobile{


    public function __construct(
    public string $brand,
    public string $model,
    public string $color,
    public string $kms,
    public int|float $price,
    public string $year,
    ) {}

    public function set_color(string $color) : void {
      $this->color = $color;
    }

    public function get_color() : string {
          return $this->color;
      }

   public function set_price(int|float $price) : void{
    $this->price = $price;
   }


   public function get_price() : int|float{
    return  $this->price;
   }
   
   
   protected function set_builder(string $builder) : void{
     
   }


   
}

$car = new Car('BMW','X3', 'silver', '10.000', '2017', 60.500);
$car->set_color('army');
echo $car->get_color();


#check that on method set_builder will produce an error because it´s not public

 #lets destroy the object
 unset($car);
 




?>