<?php
namespace Application\Models\Services;

use Application\Models\Article;
use Application\Models\Mappers\ArticleMapper;

class Displayer{
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
    
    public function displayArticles($id){
        
        $article = $this->domainObjectFactory->create(Article::class);
        $mapper = $this->mapperFactory->create(ArticleMapper::class);
        
        $article->setId($id);
        $mapper->fetch($article);
        
        return $article;
    }
    
}