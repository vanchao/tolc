<?php

class Router{
    public static function route($url) {
        $url_array = array();
        $url_array = explode('/', $url);

        // Controller name
        $controller = isset($url_array[0]) ? $url_array[0] : '';
        array_shift($url_array);

        // Method name
        $action = isset($url_array[0]) ? $url_array[0] : '';
        array_shift($url_array);

        // Parameters
        $query_string = $url_array;

        // Redirect to default controller if controller is empty
        $controller = empty($controller) ? DEFAULT_CONTROLLER : $controller;

        // Redirect to default action if action is empty
        $action = empty($action) ? 'index' : $action;
        
        $controller_name = $controller;
        $controller = ucwords($controller);

        $dispatch = new $controller($controller_name, $controller);
        if((int)method_exists($controller, $action))
            call_user_method_array(array($dispatchm, $action), $query_string);
        else {
            /* Error Generation Code Here */
        }
    }
}
