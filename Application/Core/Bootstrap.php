<?php
use Application\Core\Factories\ServiceFactory;
use Application\Core\Factories\DomainObjectFactory;
use Application\Core\Factories\DataMapperFactory;
use Application\Core\Routes\Routing;
use Application\Views\Home;

//An instance that will be passed as a parameter to mapper factory.
$dbhProvider = function (){
    //Create connection.
    $instance = new \mysqli('localhost', 'root', 'rabackoff', 'BLOG');
    return $instance;
};

$serviceFactory = new ServiceFactory(new DomainObjectFactory, new DataMapperFactory($dbhProvider));

//Process the URL and initialize the routing mechanism.
$routing = new Routing();

//Create the view class.
$class = 'Application\\Views\\' . $routing->getResource();
$view = new $class($serviceFactory);

//Create the controller class.
$class = 'Application\\Controllers\\' . $routing->getResource();
$controller = new $class($view, $serviceFactory);

//Alter the model through controller if necessary.
$command = $routing->getCommand();
$controller->$command();

//Execute the response to the user.
$view->render();
?>