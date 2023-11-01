<?php
spl_autoload_register(function ($className) {
    if(str_starts_with($className,'Samir\\')){
        $className = str_replace('Samir\\','', $className);
        include __DIR__ .'/src/'. $className .'.php';
    }
});