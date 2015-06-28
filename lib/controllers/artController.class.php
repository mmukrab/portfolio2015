<?php
require_once('baseController.class.php');
class artController extends baseController
{
    public function handleRequest() 
    {
        require_once('..\lib\views\artPage.class.php');
        $page = new artPage;
        $page->show();
    }
}

