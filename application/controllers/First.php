<?php

/* 
 * A controller to fix the appropriate link.
 * @author: Dima Goncharov
 */

class First extends Application {

    //Default constructor
    function __construct() {
        parent::__construct();
    }

    function index() {
        $this->data['pagebody'] = 'justone';    // this is the view we want shown
        // build the list of authors, to pass on to our view
        $source = $this->quotes->first();
        
        $this->data['who'] = $source['who'];
        $this->data['mug'] = $source['mug'];

        $this->data['what'] = $source['what'];

        $this->render();
    }
    
    function zzz() {
        $this->data['pagebody'] = 'justone';    // this is the view we want shown
        // build the list of authors, to pass on to our view
        $source = $this->quotes->get(1);
        
        $this->data['who'] = $source['who'];
        $this->data['mug'] = $source['mug'];

        $this->data['what'] = $source['what'];

        $this->render();
    }
    
    function gimmie($digit) {
        $this->data['pagebody'] = 'justone';    // this is the view we want shown
        // build the list of authors, to pass on to our view
        $source = $this->quotes->get($digit);
        
        $this->data['who'] = $source['who'];
        $this->data['mug'] = $source['mug'];

        $this->data['what'] = $source['what'];

        $this->render();
    }

}