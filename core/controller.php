<?php

class Controller extends Application {
    protected $controller;
    protected $action;
    protected $models;
    protected $view;

    public function __construct($controller, $action) {
        parent::__construct();
        $this->controller = $controller;
        $this->action = $action;
        $this->view = new View();
    }

    protected function load_model($model) {
        if(class_exists($model)) $this->models[$model] = new $model();
    }

    protected function get_model($model) {
        if($flag = is_object($this->models[$model])) return $this->models[$model];
        else return $flag;
    }

    protected function get_view() {
        return $this->view;
    }
}
