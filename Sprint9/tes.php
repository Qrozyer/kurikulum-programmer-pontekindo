<?php

function autoloadFoo($class)
{
    $file = "Foo/{$class}.php";
    if (is_readable($file)) {
        require $file;
    }
}

function autoloadBar($class)
{
    $file = "Bar/{$class}.php";
    if (is_readable($file)) {
        require $file;
    }
}

spl_autoload_register("autoloadFoo");
spl_autoload_register("autoloadBar");


$bebek = new Bebek();