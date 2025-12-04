<?php

// class Robot {
//     public $greetings = "Namaste" ;

//     public function greeting() {
//         echo "<p>{$this->greetings} \t from Robot</p>";
//     }
// }

// class Android extends Robot {

//      public function greeting() {
//         echo "<p>{$this->greetings} \t from Android</p>";
//     }
// }


// $obj1 = new Robot ;
// $obj1->greeting();

// $obj2 = new Android ;
// $obj2->greeting();



class Robot
{
	public function greet()
	{
		return 'Hello!';
	}
}

class Android extends Robot
{
	public function greet()
	{
		$greeting = parent::greet();
        return "<p>$greeting .From android</p>";
	}
}

$robot = new Robot();

echo $robot->greet(); // Hello

$android = new Android();
echo $android->greet(); // Hi!