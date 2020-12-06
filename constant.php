<?php

// print constant outside the class
class Goodbye {
    const LEAVING_MESSAGE = 'Thanks You So much';

}

echo Goodbye::LEAVING_MESSAGE . "<br>";

// print constant inside the class


class Welcome {
    const LEAVING_MESSAGE = 'Good Morning Welcome Back';

    public function hello()
    {
        echo self::LEAVING_MESSAGE;
    }
}

$obj = new Welcome();
$obj->hello();