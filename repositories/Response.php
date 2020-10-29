<?php

namespace Repositories;

use Illuminate\Http\Client\Response as ResponseClient;

final class Response
{
    protected static $success;
    protected static $code;
    protected static $data;

    public static function bind(ResponseClient $response)
    {
        self::$code = $response->status();
        self::$success = $response->successful();
        self::$data = $response->json();

        return self::send();
    }

    private static function send()
    {
        return [
            'success' => self::$success,
            'code' => self::$code,
            'data' => self::$data
        ];
    }
}
