<?php
spl_autoload_register(function ($className) {
    if(str_starts_with($className,"Samir\\"))