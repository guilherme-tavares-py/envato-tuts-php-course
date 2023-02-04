<?php

function output($value){
        echo "<pre>";
        print_r($value);
        echo "</pre>";
}

function pluck($arr, $key) {
    $result = array_map(function($item) use($key){
        return $item[$key];
    }, $arr);

    return $result;
}

function sum($n1, $n2) {
    return $n1 + $n2;
}