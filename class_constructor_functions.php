<?php
class Cars {
      /* Member variables */
      var $price;
      var $name;

/*
We don't need to call set function separately to set price and name.
That is becase of the constructor
We can initialize these two member variables at the time of object creation only.
Which is good... it will be less code
*/

// the constructor takes two paramters.
// We set the paramaters to be equal to the variables..
      function __construct( $par1, $par2 ) {
         $this->name = $par1;
         $this->price = $par2;
      }


      function getPrice(){
         echo $this->price ." KR <br/>";
      }


      function getname(){
         echo $this->name ." ---> ";
      }
   }



$obj1 = new Cars( "Volvo", 40000 );
$obj2 = new Cars ( "Toyota", 400000 );
$obj3 = new Cars ("Ibiza", 9000000 );

/* Get those set values */
$obj1->getname();
$obj1->getPrice();

$obj2->getname();
$obj2->getPrice();

$obj3->getname();
$obj3->getPrice();

/*
Volvo ---> 40000 KR
Toyota ---> 400000 KR
Ibiza ---> 9000000 KR
*/



?>
