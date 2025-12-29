<?php

/** 
 *array('apa', 1, 2);
 * ['apa', 1, 2];
*/

// [key => value];
$data = ['Dias', 'ilyasa', 'Ilyas'];
// $data = [0 => 'Dias', 1 => 'Ilyasa', 2 => 'Dias'];
var_dump($data);

// [key => value];

$data = [
    'name' => 'Dias Ilyasa',
    'age' => 25,
];

var_dump($data);

// take the value of 3
$data = [
    0 => 1,
    1 => 2,
    3,
    4,
    5
];

var_dump(data[0]);

// append value to an existing array

$data = ['PT', 'Jaya', 'Pirata'];

// array_push($data, 'Dinamika');
// $data[] = 'Dinamika';

// --- change the value to certain element of array
$data[0] = 'Dinamika';

// var_dump($data);

echo json_encode($data, JSON_PRETTY_PRINT);

// -- merging array

$array_1 = [1, 2, 3];
$array_2 = ['a', 'b', 'c'];

// $data = array_merge($array_2, $array_1);
$data = array_push($array_2, $array_1);
[
    'a',
    'b',
    'c',
    [1, 2, 3]
];

var_dump($data);

$continer = [];

$total_index = count($array_1);

count($array_1);