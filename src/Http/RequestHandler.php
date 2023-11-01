<?php

namespace Samir\Http;

class  RequestHandler
{
    public function handle(Request $request): Response
    {
        return new Response('samir is dev');
    }
}
