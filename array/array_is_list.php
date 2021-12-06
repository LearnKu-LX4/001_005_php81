<?php


echo("array_is_list([1, 2, 3]):");
dump(array_is_list([1, 2, 3]));

echo("array_is_list(['apple', 'orange']):");
dump(array_is_list(['apple', 'orange']));

echo("array_is_list(['apple', 2, 3]):");
dump(array_is_list(['apple', 2, 3]));

echo("array_is_list([0 => 'apple', 'orange']):");
dump(array_is_list([0 => 'apple', 'orange']));

echo("array_is_list([0 => 'apple', 1 => 'orange']):");
dump(array_is_list([0 => 'apple', 1 => 'orange']));


// array_is_list([1, 2, 3]):
// true
// array_is_list(['apple', 'orange']):
// true
// array_is_list(['apple', 2, 3]):
// true
// array_is_list([0 => 'apple', 'orange']):
// true
// array_is_list([0 => 'apple', 1 => 'orange']):
// true

// 空数组
echo("array_is_list([]):");
dump(array_is_list([]));



// Key 不是从 0 开始的
echo "array_is_list([1 => 'apple', 'orange']):";
dump(array_is_list([1 => 'apple', 'orange']));

// Key 都是数字，但不是按照顺序的
echo "array_is_list([1 => 'apple', 0 => 'orange']):";
dump(array_is_list([1 => 'apple', 0 => 'orange']));

// Key 非数字的
echo "array_is_list([0 => 'apple', 'foo' => 'bar']):";
dump(array_is_list([0 => 'apple', 'foo' => 'bar']));

// 不是按照顺序的
echo "array_is_list([0 => 'apple', 2 => 'bar']):";
dump(array_is_list([0 => 'apple', 2 => 'bar']));