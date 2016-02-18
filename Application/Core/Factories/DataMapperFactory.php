<?php
namespace Application\Core\Factories;

use Application\Core\Models\Mappers\ArticleMapper;
use Application\Core\Models\Mappers\UserMapper;

class DataMapperFactory{
    //MySQLi provider.
    protected $dbhProvider;
    
    /**
     * The constructor initializes the provider.
     * @param type $dbhProvider
     */
    public function __construct($dbhProvider){
        $this->dbhProvider = $dbhProvider;
    }
    
    /**
     * 
     * @param type $name The name of the class that will be passed from th Service.
     * @return \Application\Core\Factories\{Class} . Returns the mapper instance.
     */
    public function create($name){
        return new $name($this->dbhProvider);
    }
}
?>