<?php

class MyClass {

    public static $x = 20;

    public static function f() {
        echo 'Ako smo metodu deklarirali s pomoću ključne riječi static, tada joj možemo prstupiti bez instanciranja klase u objekt!!!';
    }
}

                            // Važno - nema koda: $objekt = new MyClass();
MyClass::f();               // Svojstvu i metodi pristupamo pomoću operatora (::), a ne pomoću (->)
echo '<br>';
echo MyClass::$x;

echo '<br><br>';
// Možemo i klasično.
$objekt = new MyClass();
echo $objekt->f();
//echo $objekt->x;          // greška - Accessing static property MyClass::$x as non static
// *****************************************************************************
echo '<hr>';

class User {

    public $name;
    public $age;
    public static $minimumPasswordLength = 6;

    public function Describe() {
        return $this->name . " is " . $this->age . " years old";
    }

    public static function ValidatePassword($password) {
        if (strlen($password) >= self::$minimumPasswordLength) {
            return true;
        } else {
            return false;
        }
    }
}

$password = "lozinka";
if (User::ValidatePassword($password)) {
    echo "Password is valid!";
} else {
    echo "Password is NOT valid!";
}