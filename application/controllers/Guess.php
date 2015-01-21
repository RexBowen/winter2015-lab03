<?php

class Guess extends Application {

    function __construct() {
        parent::__construct();
    }

    //-------------------------------------------------------------
    //  The guess controller
    //-------------------------------------------------------------

    function index() {
        //set the pagebody to justone.php
        $this->data['pagebody'] = 'justone';  
        
        //get the required res
        $res = $this->quotes->get('4');
        
        //merge the obtained data
        $this->data = array_merge($this->data, $res);
        
        $this->render();
    }
}