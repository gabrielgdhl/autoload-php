<?php

function autoload($classe): void { 
    $namespace= getPrincipalNamespace($classe);
    
    $namespace = DIR_APP. DS . $namespace . '.php';
    $namespace = str_replace('\\', DS, $namespace);

    if (! file_exists($namespace) || is_dir($namespace)) { 
        throw new Exception("******* This Class don't exists!! --->>>> ".$namespace. "*********\n");
    }

    require $namespace;
}

function getPrincipalNamespace($namespace): ?string { 
    $configs = (array) getConfigIfExists();

    if(!isset($configs)) { 
        return  $namespace;    
    }

    $principalNamespace = explode('\\', $namespace)[0];
   
    foreach ($configs as $key => $value) {
        $keyReplaced = str_replace('\\', '', $key);

        if ($principalNamespace == $keyReplaced) {
            return str_replace($key, $value, $namespace);
        }
    }

    return $namespace;
}

function getConfigIfExists(): ?object { 
    $maping = getConfigJsonToObject();
    return $maping->autoload ?? null;
} 

function getConfigJsonToObject(): ?object { 
    $file = __DIR__.'/config.json';
    return (file_exists($file)) ? json_decode(file_get_contents($file)) : null;
}

spl_autoload_register('autoload');