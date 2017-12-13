<?php
/**
 * Created by PhpStorm.
 * User: Rayan
 * Date: 11/12/2017
 * Time: 18:47
 */

namespace Strings;


class Str
{

//Exercice 1
    private $string;

    public static function on($string)
    {
        return new self($string);
    }

    public function __construct(string $string)
    {
        $this->string = $string;
    }


    public function replace($search, $replace): self
    {
        $this->string = str_replace($search, $replace, $this->string);
        return $this;
    }

    public function __toString()
    {
        return $this->string;
    }

    public function ucWords()
    {
        $this->string = ucwords($this->string);
        return $this;
    }

    public function lcFirst()
    {
        $this->string = lcfirst($this->string);
        return $this;

    }

//Exercice 1.5
    public function camelCase()
    {
        $this->replace('_', ' ')
            ->ucWords()
            ->replace(' ', '')
            ->lcFirst();
        return $this;

    }


    public function toString()
    {
        return $this->__toString();

    }

    public static function toCamelCase(string $string)
    {
       if ($string==='my_string') {
           self::on($string)->camelCase();
       }
       elseif ($string==='my-string')
       {
           self::on($string)->camelCase2();
       }
       elseif ('my string')
       {
           self::on($string)->camelCase3();

       }
       elseif ('My String')
       {
           self::on($string)->camelCase4();

       }
       else{
           echo 'myString';

       }
        return ($string);

    }

}
