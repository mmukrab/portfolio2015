<?php
require_once('baseController.class.php');
class animationController extends baseController
{
    public function handleRequest() 
    {
        require_once('..\lib\views\animationPage.class.php');
        $page = new animationPage;
        $page->show();
    }
}

