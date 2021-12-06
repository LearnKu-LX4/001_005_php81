<?php

interface APIStatus
{
    public function label(): string;
}

enum HTTPStatus: int implements APIStatus {
    case OK            = 200;
    case ACCESS_DENIED = 403;
    case NOT_FOUND     = 404;

    public function label(): string {
        return match ($this) {
            HTTPStatus::OK => '一切正常',
            HTTPStatus::ACCESS_DENIED => '无权限访问',
            HTTPStatus::NOT_FOUND => '页面未找到',
        };
    }
}

var_dump(HTTPStatus::OK->label());
