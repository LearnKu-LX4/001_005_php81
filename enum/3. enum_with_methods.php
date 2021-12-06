<?php 

// enum HTTPStatus: int {
//     case OK            = 200;
//     case ACCESS_DENIED = 403;
//     case NOT_FOUND     = 404;
// }

enum HTTPStatus: int {
    case OK            = 200;
    case ACCESS_DENIED = 403;
    case NOT_FOUND     = 404;

    public function label(): string {
        return static::getLabel($this);
    }

    public static function getLabel(self $value): string {
        return match ($value) {
            HTTPStatus::OK => '一切正常',
            HTTPStatus::ACCESS_DENIED => '无权限访问',
            HTTPStatus::NOT_FOUND => '页面未找到',
        };
    }
}

// 可以作为传参类型绑定和返回值
function label_for_http_status(HTTPStatus $value) {
    return match ($value) {
        HTTPStatus::OK => '一切正常',
        HTTPStatus::ACCESS_DENIED => '无权限访问',
        HTTPStatus::NOT_FOUND => '页面未找到',
    };
}

class ApiResponse
{
	public function __construct(
        public HTTPStatus $status, 
    ) {} 
}

$response = new ApiResponse(HTTPStatus::NOT_FOUND);

// "页面未找到"
dump(label_for_http_status($response->status));


// "无权限访问"
dump(HTTPStatus::ACCESS_DENIED->label());

// "无权限访问"
dump(HTTPStatus::getLabel(HTTPStatus::ACCESS_DENIED));

// "页面未找到"
dump($response->status->label());

exit;