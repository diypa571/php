<?php
class Cars {
      /* Member variables */
      var $price;
      var $name;

      /* Member functions */
      function setPrice($par){
         $this->price = $par;
      }

      function getPrice(){
         echo $this->price ." KR: <br/>";
      }

      function setname($par){
         $this->name = $par;
      }

      function getname(){
         echo $this->name ."  --> ";
      }
   }



$obj1 = new Cars;
$obj2 = new Cars;
$obj3 = new Cars;

// Three objects setname
$obj1->setname( "Volvo " );
$obj3->setname( "Nissan " );
$obj2->setname( "Toyota " );

// Three objects setname
$obj1->setPrice( 10000 );
$obj3->setPrice( 50000 );
$obj2->setPrice( 34000 );

$obj1->getname();
$obj1->getPrice();

$obj2->getname();
$obj2->getPrice();

$obj3->getname();
$obj3->getPrice();



?>
