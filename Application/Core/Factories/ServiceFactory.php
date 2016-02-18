<?php
namespace Application\Core\Factories;

use Application\Models\Services\Displayer;
use Application\Models\Services\ArticleCounter;

class ServiceFactory{
    //Data mapper factory.
    protected $mapper;
    //Domain Object factory.
    protected $domainObject;
    
    public function __construct($domainObject, $mapper) {
        $this->domainObject = $domainObject;
        $this->mapper = $mapper;
    }
    
    public function create($name){
        //New service instance.
        $class = 'Application\\Models\\Services\\' . $name;
        $instance = new $class($this->domainObject, $this->mapper);
        return $instance;
    }
}