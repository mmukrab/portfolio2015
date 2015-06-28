<?php
require_once('baseController.class.php');
class gamesController extends baseController
{
    public function handleRequest() 
    {
        require_once('..\lib\views\gamesPage.class.php');
        $page = new gamesPage;
        $page->show();
    }
}

