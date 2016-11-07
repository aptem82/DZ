<?php

function read_file($input_file)
{
    $cont = file_get_contents($input_file);
    return $cont;
}

print read_file("test.txt");
