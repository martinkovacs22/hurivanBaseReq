<?php

namespace Res;

require_once __DIR__ . "/../autoloader.php";

use BaseReq\BaseReq;
use CookieHandler\CookieHandler;
use HTTP_STATUS\HTTP_STATUS;
use ReturnValue\ReturnValue;

class Res extends BaseReq
{



    private static Res |null $inc = null;

    public static function getInc(): Res|null
    {

        if (isset(self::$inc)) {
            self::$inc = new Res();
        }
        return self::$inc;
    }

    private function __construct()
    {
        $this->setCookieHandler(new CookieHandler("res"));
    }


    public static function build()
    {

        foreach (self::getCookieHandler()->getArrayOfCookie() as $key => $value) {
            $_COOKIE[$key] = $value;
        }
        $jwt = is_string(self::getJwt()) ? self::getJwt() : "";
        echo json_encode(ReturnValue::createReturnArray(
            false,
            self::getBody(),
            $jwt,
            (is_string(self::getSqlError()) || is_array(self::getSqlError()))
        ));
        $code = self::getHttpstatus();
        http_response_code($code);
        exit();
    }
}
