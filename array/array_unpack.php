<?php

$array_1 = [
    'key1' => 'foo', 
    'key2' => 'bar'
];
$array_2 = [
    'key3' => 'baz', 
    'key4' => 'qux'
];

$array_unpacked = [...$array_1, ...$array_2];
$array_merged   = array_merge($array_1, $array_2);

// ['foo', 'bar', 'baz', 'qux', 'quux'];
dump($array_unpacked);

// ['foo', 'bar', 'baz', 'qux', 'quux'];
dump($array_merged);

// true
dump($array_merged == $array_unpacked);

// array:1 [▼
//   "same_key" => "value1"
// ]
dump(
    ['same_key' => 'value1']
   +['same_key' => 'value2']
);

// array:1 [▼
//   "same_key" => "value2"
// ]
dump([
    ...['same_key' => 'value1'],
    ...['same_key' => 'value2']
]);

exit;
