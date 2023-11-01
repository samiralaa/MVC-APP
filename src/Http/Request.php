<?php
namespace Samir\Http;

class  Request
{
    public function post($name=null ,$defullt=null)
    {
        if($name == null)
        {
            return $_POST;
        }
        return $_POST[ $name ] ?? $defullt;
    }

    public function query($name=null ,$defullt=null)
    {
        if($name == null)
        {
            return $_GET;
        }
        return $_GET[ $name ] ?? $defullt;
    }

    public function cookes($name=null ,$defullt=null)
    {
        if($name == null)
        {
            return $_COOKIE;
        }
        return $_COOKIE[ $name ] ?? $defullt;
    }

    public function server ($name=null ,$defullt=null)
    {
        if($name == null)
        {
            return $_SERVER;
        }
        return $_SERVER[ $name ] ?? $defullt;
    }
}