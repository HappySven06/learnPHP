<?php

class Box {
    public static $count = 0;

    public static function test() {
        var_dump(static::class);
    }
}

class metalBox extends Box {

}

/*
$box1 = new Box;
$box1::$count = 1;
$box2 = new Box;
$box2::$count = 2;
var_dump($box1::$count, $box2::$count);
*/

Box::$count = 1;
Box::$count = 2;
metalBox::test();
var_dump(Box::$count, Box::$count);