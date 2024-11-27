<?php

namespace ReturnValue;

require_once __DIR__."/../autoloader.php";

use Res\Res;

abstract class ReturnValue
{
    public static function createReturnArray(
        bool $err = false,
        array $data = []
    ): array {

        $res = Res::getInc();

        return [
            "err" => $err,
            "data" => $data,
            "jwt" => $res->getJwt(),
            "sql" => $res->getSqlError()
        ];
    }
    public static function SQLError($err=false,$data=[]):array{
        
        return ["err"=>$err,"data"=>$data];

    }
}

?>
