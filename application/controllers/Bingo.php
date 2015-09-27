<?php

/* 
 * A controller to fix the appropriate link.
 * @author: Dima Goncharov
 */

class Bingo extends Application {

    //Default constructor 
    function __construct() {
        parent::__construct();
    }

    
    function index() {
        $this->data['pagebody'] = 'justone';    // this is the view we want shown
        // build the list of authors, to pass on to our view
        $source = $this->quotes->get(5);
        
        $this->data['who'] = $source['who'];
        $this->data['mug'] = $source['mug'];

        $this->data['what'] = $source['what'];

        $this->render();
    }
    
    function wisdom() {
        $this->data['pagebody'] = 'justone';    // this is the view we want shown
        // build the list of authors, to pass on to our view
        $source = $this->quotes->get(6);
        
        $this->data['who'] = $source['who'];
        $this->data['mug'] = $source['mug'];

        $this->data['what'] = $source['what'];

        $this->render();
    }
}