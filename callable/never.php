<?php 


function redirect(string $url): never {
    header('Location: ' . $url);
    exit();
}

redirect('Test'); 

echo "这行代码永远不会被执行";


// 没有终止，会报错 
function redirect(string $url): never {
    header('Location: ' . $url);
}
redirect('Test'); 


// 不允许 return void
function doSomeThing(): never {
    return;
}
doSomeThing();


// 类继承里面，如果父类的方法是返回值是 string 或者
// 其他高级的返回类型，子类继承的时候是可以变跟为 never 类型的
class Foo {
    public function test(): string {}
}
class FooBar extends Foo{
    public function test(): never {}
}