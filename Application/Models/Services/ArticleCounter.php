<?php
namespace Application\Models\Services;

use Application\Models\Mappers\ArticleMapper;

class ArticleCounter{
    //Article factory.
    protected $domainObjectFactory;
    //Mapper factory.
    protected $mapperFactory;
    
    /**
     * 
     * @param type $article Article domain object factory.
     * @param type $mapper Article mapper factory.
     */
    public function __construct($domainObjectFactory, $mapperFactory) {
        $this->domainObjectFactory = $domainObjectFactory;
        $this->mapperFactory = $mapperFactory;
    }
    
    //A method that counts the number of Articles in the Database.
    public function numOfArticles(){
        $mapper = $this->mapperFactory->create(ArticleMapper::class);
        return $mapper->articleCounter();
    }
}