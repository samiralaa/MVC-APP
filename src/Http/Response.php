<?php
namespace Samir\Http;

class Response
{
   
    public function __construct(protected string $body,protected int $status = 200)
    {

    }   
     public function send()
    {
      echo $this->body;
    }
}