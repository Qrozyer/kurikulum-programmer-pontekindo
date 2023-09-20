<?php

class Controller
{
    public function view($path, $data = []){
        require_once '../app/views/' . $path . '.php';
    }
}