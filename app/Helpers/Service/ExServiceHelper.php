<?php

namespace Application\Helpers\Service;

use Source\Adapters\AdapterUser;
use Source\Repositories\RepositoryUser;

class ExServiceHelper { 
    public function __construct() { 
        echo 'Classe --> '.__CLASS__."\n";
        $this->getRepo();
        $this->getAdapter();
    }

    public function getRepo() {
        return new RepositoryUser(); 
    }

    public function getAdapter() {
        return new AdapterUser(); 
    }
}
