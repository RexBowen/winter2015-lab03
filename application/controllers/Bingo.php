<?php

class Bingo extends Application {

    function __construct() {
        parent::__construct();
    }

    //-------------------------------------------------------------
    //  The bingo controller
    //-------------------------------------------------------------

    function index() {
        //set the pagebody to justone.php
        $this->data['pagebody'] = 'justone';

        //call the first method defined in quotes
        $res = $this->quotes->get('5');

        //merge the obtained data
        $this->data = array_merge($this->data, $res);

        $this->render();
    }

    function wisdom() {
        //set the pagebody to justone.php
        $this->data['pagebody'] = 'justone';

        //get a specific quote
        $res = $this->quotes->get('6');

        //merge the obtained data
        $this->data = array_merge($this->data, $res);

        $this->render();
    }

}
