<?php

// 不能有属性
interface APIStatus
{
    public function label(): string;
}

// 继承，如果未实现 label 方法的话
// FatalError
// Class HTTPStatus contains 1 abstract method and must therefore be declared abstract or implement the remaining methods (APIStatus::label)
// enum HTTPStatus: int implements APIStatus {
//     case OK            = 200;
//     case ACCESS_DENIED = 403;
//     case NOT_FOUND     = 404;
// }

// 继承
enum HTTPStatus: int implements APIStatus {
    case OK            = 200;
    case ACCESS_DENIED = 403;
    case NOT_FOUND     = 404;

    public function label(): string {
        return match ($value) {
            HTTPStatus::OK => '一切正常',
            HTTPStatus::ACCESS_DENIED => '无权限访问',
            HTTPStatus::NOT_FOUND => '页面未找到',
        };
    }
}

class ApiResponse
{
	public function __construct(
        public HTTPStatus $status, 
    ) {} 
}

$response = new ApiResponse(HTTPStatus::NOT_FOUND);

// HTTPStatus {#1854 ▼
//     +name: "NOT_FOUND"
//     +value: 404
//   }
dd($response->status);
