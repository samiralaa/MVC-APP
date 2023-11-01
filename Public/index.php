<?php
use Samir\Http\Request;

use Samir\Http\RequestHandler;

require __DIR__ .'/../autolode.php';
$requestHandeler = new RequestHandler();
$response = $requestHandeler->handle(new Request);
$response->send();