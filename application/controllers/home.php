<?php

class Home extends Controller {

    /**
     * index 
     * 
     * @param mixed $id 
     * @access public
     * @return void
     */
    public function index($id)
    {
        $this->get_view()->set('id', $id);
        $this->get_view()->render('home_index_view');
    }
}
