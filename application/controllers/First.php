<?php

class First extends Application {

    function __construct() {
        parent::__construct();
    }

    //-------------------------------------------------------------
    //  first controller
    //-------------------------------------------------------------

    function index() {
        //set the pagebody to justone.php
        $this->data['pagebody'] = 'justone';  
        
        //call the first method defined in quotes
        $res = $this->quotes->first();
        
        //merge the obtained data
        $this->data = array_merge($this->data, $res);
        
        $this->render();
    }
    
    function zzz() {
        //set the pagebody to justone.php
        $this->data['pagebody'] = 'justone';  
        
        //get the targetted resource
        $res = $this->quotes->get('1');
        
        //merge the obtained data
        $this->data = array_merge($this->data, $res);
        
        $this->render();
    } 

    
        function gimme($value) {
        //set the pagebody to justone.php
        $this->data['pagebody'] = 'justone';  
        
        //get the targetted resource
        $res = $this->quotes->get($value);
        
        //merge the obtained data
        $this->data = array_merge($this->data, $res);
        
        $this->render();
    } 

}
