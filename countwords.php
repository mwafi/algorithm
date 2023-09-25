<?php

class MyStr extends \Str {
    public function reverse() {
        return strrev($this);
    }
}

$myStr = new MyStr('Hello, world!');
$reversedString = $myStr->reverse();

echo $reversedString;


$str = new String();
