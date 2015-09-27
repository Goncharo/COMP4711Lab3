<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/*Class that bolds capitalized words as specified. Used for the hook
@author: Dima Goncharov*/
class Bolder {
    
    //Function that bolds all capitalized words.
    public function index()
    {
        $CI =& get_instance();
        $buffer = $CI->output->get_output();
        $newtext = "";


        $start = strpos($buffer, '<p class="lead">');
        $end = strpos($buffer, '</p>', $start);
        $paragraph = substr($buffer, $start, $end-$start+4);

        $newtext = preg_replace('(\b[A-Z].*?\b)','<strong>$0</strong>', $paragraph);   
        $buffer = preg_replace('/<p class="lead">(.*?)<\/p>/','<p class="lead">'.$newtext.'</p>', $buffer);


        $CI->output->set_output($buffer);
        $CI->output->_display();
    }
}