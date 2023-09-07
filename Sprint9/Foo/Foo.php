<?php

class Foo
{
    public function someFunction()
    {
        echo "Calling ". __FUNCTION__ ."() in class ". __CLASS__ ."\n";
    }
}