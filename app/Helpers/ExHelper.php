<?php

namespace Application\Helpers;

class ExHelper { 
    public function __construct()
    {
        echo 'Classe --> '.__CLASS__."\n";
        new ExNoNamespace();
    }
}
