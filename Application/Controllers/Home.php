<?php
namespace Application\Controllers;


class Home {
    //Associated View instance.
    protected $view;
    //Shared serviceFactory instance.
    protected $serviceFactory;
    
    function __construct($view, $serviceFactory) {
        $this->view  = $view;
        $this->serviceFactory = $serviceFactory;
    }
    
    //Default method for Home page.
    public function index(){
        $articleCounter = $this->serviceFactory->create('ArticleCounter');
        //The above implementantion alter the state of the view.
        $iterations = $articleCounter->numOfArticles();
        $this->view->setNumberOfArticles($iterations);
    }
}

