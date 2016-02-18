<?php
namespace Application\Core\Routes;
class Routing{
    //Default controller and view name.
    protected $resource;
    //Default action.
    protected $command;
    protected $url;


    public function __construct() {
        $this->parseURL();
        $this->init();
    }
    
    protected function parseURL(){
        if(isset($_GET['url'])) {
            $this->url = explode('/', filter_var(rtrim($_GET['url'], '/'), FILTER_SANITIZE_URL));
        }
    }
    
    /**
     * If url exist set the associated values else use the default.
     */
    protected function init(){
        $this->resource = isset($this->url[0]) ? $this->url[0] : 'Home';
        $this->command = isset($this->url[1]) ? $this->url[1] : 'index';
    }
    
    //Routing Interface 
    
    //Returns the url resource.
    public function getResource(){
        return $this->resource;
    }
    
    //Returns the url command.
    public function getCommand(){
        return $this->command;
    }
}

?>