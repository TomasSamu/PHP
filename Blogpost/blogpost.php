<?php

class Blogpost {

    public $id = null;
    public $headline = null;
    public $text = null;
    public $added_at = null;
    public $user_id = null;
    public $status = null;

    public function __construct($id, $headline = null)

    {
        $this->user_id = $id;
        $this->headline = $headline;

        global $all_posts;
        $all_posts = $this;
        
       
    }

    public function publish()
    {
        $this->status = 'published';

    }   
 
}




