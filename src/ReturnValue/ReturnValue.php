<?php

namespace ReturnValue;

abstract class ReturnValue
{
    public static function createReturnArray(
        bool $err = false,
        array $data = [], // Csak t�mb�t v�runk
        ?string $jwt = null, // Nullable string
        ?bool $sql = null // Nullable bool
    ): array {
        return [
            "err" => $err,
            "data" => $data,
            "jwt" => $jwt,
            "sql" => $sql
        ];
    }
}

?>
