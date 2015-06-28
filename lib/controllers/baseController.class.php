<?php
// Portfolio basecontroller | Melvin Mukrab

class baseController
{
    protected $this->posted;
    
    public function __construct()
    {
        $this->posted = ($_SERVER['REQUEST_METHOD'] == 'POST');
    }

    public function handleRequest();
    {
        echo "Hello World";
    }
    
    public function getParameters();
    {
        
    }
    public function createPage();
    {
        
    }
}


