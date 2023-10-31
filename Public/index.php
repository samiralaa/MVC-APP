<?php
$requestHandeler = new $RequestHandeler();
$response = $requestHandeler->handle(new Request);
$response->send();