<?php
define("ROOT", "http://localhost:8080");
define("ASSET", "http://localhost:8080/app/Assets/css/style.css");

function url(string $uri = null): string
{
    if ($uri) {
        return ROOT . "/{$uri}";
    }
    return ROOT;
}