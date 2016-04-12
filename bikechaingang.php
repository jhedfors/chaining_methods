<?php 

	class bike {
		public $price;
		public $max_speed;
		public $miles;

		public function __construct($price , $speed){
			$this->price = $price; 
			$this->max_speed = $speed;
			$this->miles = 0;	
		}

		function displayInfo() { 

			echo $this->price . "<br>";
			echo $this->max_speed . "<br>";
			echo $this->miles . "<br>";
			return $this;
		}

		function drive() {

			echo "Driving <br>";
			$this->miles += 10;
			return $this;
		}

		function reverse() {

			echo "Reversing <br>";
			$this->miles -= 5;
			
			if($this->miles < 0) {
				$this->miles = 0;
			}
			return $this;

		}
	}

	$obj1 = new bike(100, 20);
	$obj2 = new bike(5, 10);
	$obj3 = new bike(500, 100);

		$obj1->drive()->drive()->drive()->reverse()->displayInfo();
		// $obj1->drive();
		// $obj1->drive();
		// $obj1->reverse();
		// $obj1->displayInfo();

		$obj2->drive()->drive()->reverse()->reverse()->displayInfo();
		// $obj2->drive();
		// $obj2->reverse();
		// $obj2->reverse();
		// $obj2->displayInfo();

		$obj3->reverse()->reverse()->reverse()->displayInfo();
		// $obj3->reverse();
		// $obj3->reverse();
		// $obj3->displayInfo();

	
	// $obj2 = new bike();
	// $obj3 = new bike();

	// echo $obj1->drive();



?>

<!-- Now add a constructor method to the class and require the user to specify the price and max_speed of each instance. In the constructor also specify in the code so that the initial miles is set to be 0 whenever a new instance is created.

Add the following functions for this class:

displayInfo() - have this method display the bike's price, maximum speed, and the total miles driven.
drive() - have it display "Driving" on the screen and increase the total miles driven by 10.
reverse() - have it display "Reversing" on the screen and decrease the total miles driven by 5.

Have the first instance drive three times, reverse once, and have it displayInfo(). 

Have the second instance drive twice, reverse twice, and have it displayInfo(). 

Have the third instance reverse three times and displayInfo().

What would you do to prevent the instance from having negative miles? -->