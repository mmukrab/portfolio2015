<?php
require_once('baseController.class.php');
class aboutController extends baseController
{
    public function handleRequest() 
    {
        require_once('..\lib\views\aboutPage.class.php');
        $page = new aboutPage;
        $page->show();
    }
}

