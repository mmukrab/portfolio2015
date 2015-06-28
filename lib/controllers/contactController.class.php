<?php
require_once('baseController.class.php');
class contactController extends baseController
{
    public function handleRequest() 
    {
        require_once('..\lib\views\homePage.class.php');
        $page = new homePage;
        $page->show();
    }
}

