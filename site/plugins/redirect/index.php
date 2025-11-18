<?php

use Kirby\Cms\Helpers;
  
function redirect(string $url = '/', int $code = 302): never
{
  Response::go($url, $code);
}