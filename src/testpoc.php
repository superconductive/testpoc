<?php

namespace chrisw1337\testpoc;

class testpoc
{
    /**
     * Example method that returns a greeting message.
     *
     * @param string $name
     * @return string
     */
    public function greet(string $name): string
    {
        return "Hello, " . $name . "! Welcome to mypackage.";
    }
}