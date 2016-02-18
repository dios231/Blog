<?php
namespace Application\Views;

class Home{
    //Number of articles.
    protected $numberOfArtciles;
    //The share serviceFactory instance between view and Controller.
    protected $serviceFactory;
    
    public function __construct($serviceFactory){
        $this->serviceFactory = $serviceFactory;
    }
    
    //Generate the respones to the user;
    public function render(){
        $service = $this->serviceFactory->create('Displayer');
        $iterations = $this->numberOfArtciles;
        for ($i=1; $i<=$iterations; $i++){
            var_dump($service->displayArticles($i));
            echo '<br>';
        }
    }
    
    public function setNumberOfArticles($numberOfArticles){
        $this->numberOfArtciles = $numberOfArticles;
    }
}