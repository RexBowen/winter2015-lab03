<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class First extends Application {

    function __construct() {
        parent::__construct();
    }

    //-------------------------------------------------------------
    //  The normal pages
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
        
        //call the first method defined in quotes
        $res = $this->quotes->get('1');
        
        //merge the obtained data
        $this->data = array_merge($this->data, $res);
        
        $this->render();
    } 

}
