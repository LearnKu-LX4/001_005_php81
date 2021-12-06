

<?php

// class Foo {
//     final public const TEST = '1';
// }

// class Bar extends Foo {
//     public const TEST = '2';
// }

// // "2"
// dd(Bar::TEST);




// class Foo {
//     private final const TEST = '1';
// }



interface Template {
    final public const SUFFIX = '.blade.php';
}

class WorkingTemplate implements Template {
    const SUFFIX = '.tpl';
}
