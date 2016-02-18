<?php
namespace Application\Core\Factories;

use Application\Models\Article;
use Application\Models\User;

class DomainObjectFactory{
    /**
     * 
     * @param type $name
     * @return \Application\Core\Factories\{name}. Retuens the domain object instance.
     */
    public function create($name){
        return new $name();
    }
}