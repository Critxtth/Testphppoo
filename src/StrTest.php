<?php

namespace Strings;

use PHPUnit\Framework\TestCase;

class StrTest extends TestCase
{
    //Exercice 1
    public function testExo1()
    {
        $string = (string)Str::on('my_string')
            ->replace('_', ' ')
            ->ucwords()
            ->replace(' ', '')
            ->lcfirst();

        dump($string);
        $this->assertSame('myString',$string);

    }


    //Exercice 1.5
    public function testExo1_5()
    {
        $string= Str::on('my_string')->camelCase()->toString(); // true

        $this->assertSame('myString', $string);

        dump($string);

    }
    //Exercice 2

    public function testExo2_1()
    {
        $string = Str::toCamelCase('my_string') ;

        $this-> assertSame('myString', $string);

    }public function testExo2_2()
    {
        $string = Str::toCamelCase('MyString') ;

        $this-> assertSame('myString', $string);

    }public function testExo2_3()
    {
        $string = Str::toCamelCase('my-string') ;

        $this-> assertSame('myString', $string);

    }public function testExo2_4()
    {
        $string = Str::toCamelCase('my string') ;

        $this-> assertSame('myString', $string);

    }public function testExo2_5()
{
    $string = Str::toCamelCase('My String') ;

    $this-> assertSame('myString', $string);

}
// $string = Str::toCamelCase('myString') === 'myString'; // true --TODO
// $string = Str::camelCase('my-string') === 'myString'; // true --TODO
// $string = Str::camelCase('my string') === 'myString'; // true --TODO
// $string = Str::camelCase('My String') === 'myString'; // true --TODO
}

?>