<?php


// ------- 1. 对比 Closure::fromCallable ---------

// PHP 7.1 发布的 Closure::fromCallable 可调用变量功能：
$callable = Closure::fromCallable('strtoupper');
echo $callable('hello, world'); 
// 在新的 8.1 语法里，使用以下对等于上面：
$callable = strtoupper(...);
echo $callable('hello, world'); 

// ------- 2. 四种常见 Callable 如下 ---------

// 1. 函数
$callable = strlen(...);
echo $callable('hello world') . PHP_EOL;


// 2. 类方法
class User {
    public function __construct(
        public string $first_name,
        public string $last_name
    ){}

    public function getFullName()
    {
        return $this->first_name .' '. $this->last_name;
    }
}
$user = new User('Charlie', 'Jade');
$fullname = $user->getFullName(...);
echo $fullname()  . PHP_EOL;

// 3. Static 方法
class Str{
    public static function toLower(string $string)
    {
        return strtolower($string);
    }
}

$callable = Str::toLower(...);
echo $callable('HELLO WORLD~') . PHP_EOL;

// 4. 匿名函数
$function = function($string) {
    return str_shuffle($string);
};
$callable = $function(...);
echo $callable('Hello World!') . PHP_EOL;


// -------------- 3. 调用 Scope ------------
function shout(): void {
    $value = 'Banana';
    echo $value;
}

$value = 'Apple';
$callable = shout(...);

echo $callable();



class Clock {
    public function getClockCallable(): callable {
        return $this->getTime(...);
    }

    private function getTime(): int {
        return time();
    }
}

$clock = new Clock();
$get_time = $clock->getClockCallable();
echo $get_time() . PHP_EOL;


// ------------------ 4. 将 Callable 作为参数 -----------------


// PHP 8.1 之前：
function double($value)
{
    return 2 * $value;
}

$array = [1, 2, 3, 4, 5];
$doubled = array_map('double', $array);
print_r($doubled);


// PHP 8.1 以后：

function double($value)
{
    return 2 * $value;
}

$array = [1, 2, 3, 4, 5];
$doubled = array_map(double(...), $array);
print_r($doubled);

