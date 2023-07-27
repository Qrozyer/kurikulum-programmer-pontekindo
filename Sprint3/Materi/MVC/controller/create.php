<?php
function create($nama){
    global $santri;
    $index = count($santri)+1;
    $santri[$index] = $nama;
}