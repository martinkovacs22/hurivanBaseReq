<?php
namespace HTTP_STATUS;

class HTTP_STATUS
{
    const OK = 200;
    const CREATED = 201;
    const ACCEPTED = 202;
    const NO_CONTENT = 204;

    const MOVED_PERMANENTLY = 301;
    const FOUND = 302;
    const SEE_OTHER = 303;
    const NOT_MODIFIED = 304;

    const BAD_REQUEST = 400;
    const UNAUTHORIZED = 401;
    const FORBIDDEN = 403;
    const NOT_FOUND = 404;
    const METHOD_NOT_ALLOWED = 405;
    const NOT_ACCEPTABLE = 406;
    const CONFLICT = 409;
    const UNSUPPORTED_MEDIA_TYPE = 415;
    const EXPECTATION_FAILED = 417;

    const INTERNAL_SERVER_ERROR = 500;
    const NOT_IMPLEMENTED = 501;
    const BAD_GATEWAY = 502;
    const SERVICE_UNAVAILABLE = 503;
    const GATEWAY_TIMEOUT = 504;

    /**
     * Visszaadja a megfelel� HTTP_STATUS konstansot az adott k�d alapj�n.
     *
     * @param int $code
     * @return int|null
     */
    public static function getStatus(int $code): ?int
    {
        switch ($code) {
            case 200:
                return self::OK; // Visszaadja az int �rt�ket
            case 201:
                return self::CREATED;
            case 202:
                return self::ACCEPTED;
            case 204:
                return self::NO_CONTENT;
            case 301:
                return self::MOVED_PERMANENTLY;
            case 302:
                return self::FOUND;
            case 303:
                return self::SEE_OTHER;
            case 304:
                return self::NOT_MODIFIED;
            case 400:
                return self::BAD_REQUEST;
            case 401:
                return self::UNAUTHORIZED;
            case 403:
                return self::FORBIDDEN;
            case 404:
                return self::NOT_FOUND;
            case 405:
                return self::METHOD_NOT_ALLOWED;
            case 406:
                return self::NOT_ACCEPTABLE;
            case 409:
                return self::CONFLICT;
            case 415:
                return self::UNSUPPORTED_MEDIA_TYPE;
            case 417:
                return self::EXPECTATION_FAILED;
            case 500:
                return self::INTERNAL_SERVER_ERROR;
            case 501:
                return self::NOT_IMPLEMENTED;
            case 502:
                return self::BAD_GATEWAY;
            case 503:
                return self::SERVICE_UNAVAILABLE;
            case 504:
                return self::GATEWAY_TIMEOUT;
            default:
                return null; // Visszat�r null-lal ismeretlen k�d eset�n
        }
    }

}
?>
