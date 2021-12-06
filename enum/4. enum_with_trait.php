<?php 

// 不能包含属性
trait DisplayHelper {
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

enum HTTPStatus: int {
    use DisplayHelper;

    case OK            = 200;
    case ACCESS_DENIED = 403;
    case NOT_FOUND     = 404;
}


// "无权限访问"
dump(HTTPStatus::ACCESS_DENIED->label());

// "无权限访问"
dump(HTTPStatus::getLabel(HTTPStatus::ACCESS_DENIED));

exit;