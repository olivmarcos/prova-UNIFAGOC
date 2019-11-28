<?php
define("ROOT", "http://localhost:8080");

function url(string $uri = null): string
{
    if ($uri) {
        return ROOT . "/{$uri}";
    }
    return ROOT;
}