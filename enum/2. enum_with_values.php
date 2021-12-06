<?php

// enum Status: int
// {
//     case DRAFT     = 1;
//     case PUBLISHED = 2;
//     case ARCHIVED  = 3;
// }

enum Status: string
{
    case DRAFT     = 'draft';
    case PUBLISHED = 'published';
    case ARCHIVED  = 'archived';
}

class Article
{
	public function __construct(
        public Status $status, 
    ) {} 
}

$article = new Article(Status::DRAFT);

// Status {#1854 ▼
//     +name: "DRAFT"
//     +value: "draft"
//   }
dump($article->status);

// "draft"
dump($article->status->value);

// "DRAFT"
dump($article->status->name);

// array:3 [▼
//   0 => Status {#1854 ▼
//     +name: "DRAFT"
//     +value: "draft"
//   }
//   1 => Status {#1882 ▼
//     +name: "PUBLISHED"
//     +value: "published"
//   }
//   2 => Status {#1883 ▼
//     +name: "ARCHIVED"
//     +value: "archived"
//   }
// ]
dump($article->cases());

// Status {#1882 ▼
//     +name: "PUBLISHED"
//     +value: "published"
//   }
dump(Status::from('published'));

// null
dump(Status::tryFrom('unknown'));

// ValueError
// "unknown" is not a valid backing value for enum "Status"
dump(Status::from('unknown'));


exit;