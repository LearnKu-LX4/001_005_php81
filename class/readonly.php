

<?php 

class User {
    public readonly int $uid;
    public readonly string $name;

    public function __construct(int $uid) {
        $this->uid = $uid;
    }

    public function setName(string $name){
        $this->name = $name;
        $this->id = 33;
    }
}

$user = new User(42);
$user->setName('Summer');

$user->uid = 1;

// object(User)#1 (2) {
//     ["uid"]=>
//     int(42)
//     ["name"]=>
//     string(6) "Summer"
//   }
var_dump($user);



// 赋值将会报错
// class Article {
//     public readonly int $aid;
// }
// $article = new Article();
// $article->aid = 9;


class Article {
    public readonly int $aid;

    public function setArticleID(int $aid) {
        $this->aid = $aid;
    }
}

$article = new Article();
$article->setArticleID(42);
$article->setArticleID(12);

var_dump($article->aid);




