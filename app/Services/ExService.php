<?php

namespace Application\Services;


use Application\Helpers\Service\ExServiceHelper;

class ExService { 
    public function __construct()
    {
        echo 'Classe --> '.__CLASS__."\n";
        $this->getHelper();
    }

    public function getHelper()
    {
        $serviceHelper = new ExServiceHelper();
        echo "\n";
    }
}