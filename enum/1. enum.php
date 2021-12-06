<?php

enum Status
{
    case DRAFT;
    case PUBLISHED;
    case ARCHIVED;
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
//   }
dd($article->status);

