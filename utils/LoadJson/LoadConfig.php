<?php

include_once 'loadJson.php';

class LoadConfig {
    
    private $route;
    
    public function __construct(LoadJson $route) {
        
        $this->route = $route;
        var_dump($route);
        
    }
    
    public function compareRoute() {
        foreach ($this->route as $key => $value) {
            echo $key . ', ' . $value;
        }
    }

}
$route = new LoadConfig(new LoadJson('configuration.json'));
$route->compareRoute();