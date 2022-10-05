<?php

namespace App\Services;

class SayHello
{
    function sayHello(string $name): string
    {
        return "Hello $name";
    }
}
