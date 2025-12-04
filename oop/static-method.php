<?php 

//!Creating a static class

// class MyClass
// {
//     public static function staticMethod()
//     {

//     }
// }

//!The following shows how to call a static method from the inside of the class:
//TODO => syntax

//ClassName::staticMethod("argument");

// MyClass::staticMethod();


//!Example

class HttpRequest 
{
    public static function url() :string
    {
        return strtolower(($_SERVER['REQUEST_URI']));
    }
}

echo HttpRequest::url()."<br/>";


//!TO define static property use ""static" keyword
// * public static $staticProperty;

class MyClass
{
	public static $staticProperty;

	public static function staticMethod($n)
	{
        echo self::$staticProperty = $n;
	}
}

//?To access a public static property outside of the class, you also use the class name with the :: operator

MyClass::staticMethod("sangam");