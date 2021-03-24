<?php

namespace src\modules;

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

class Controllers {
    public static function processRoot($message = "") {
        return function(Request $request, Response $response, $args) use ($message) {
            $response->getBody()->write("Hello world!" . $message);
            return $response;
        };
    }
}
