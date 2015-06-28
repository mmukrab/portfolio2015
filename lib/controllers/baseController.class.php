<?php
// Portfolio basecontroller | Melvin Mukrab

class baseController
{
    protected $posted;
    protected $parameter;
    protected $controller;
    
    public function __construct()
    {
        $this->posted = ($_SERVER['REQUEST_METHOD'] == 'POST');
    }

    public function handleRequest()
    {
        $this->parameter=$this->getParameter('page');
        $this->posted=($_SERVER['REQUEST_METHOD'] == 'POST');
        $this->createController();
        $this->showResponse();
        //$this->showPage();
    }
    
    public function getParameter($parameter)
    {
        if($this->posted && isset($_POST[$parameter]))
        {
            return $_POST[$parameter];
        }
        else
        {
            if(isset($_GET[$parameter]))
            {
                return $_GET[$parameter];
            }
        }
        return "unknown";
    }
    public function createController()
    {
        switch($this->parameter)
        {
            case 'home':
                require_once('homeController.class.php');
                $this->controller = new homeController();
                break;
            case 'animation':
                require_once('animationController.class.php');
                $this->controller = new animationController();
                break;
            case 'games':
                require_once('gamesController.class.php');
                $this->controller = new gamesController();
                break;
            case 'art':
                require_once('artController.class.php');
                $this->controller = new artController();
                break;
            case 'about':
                require_once('aboutController.class.php');
                $this->controller = new aboutController();
                break;
            case 'contact':
                require_once('contactController.class.php');
                $this->controller = new contactController();
                break;
            default:
                require_once('homeController.class.php');
                $this->controller = new homeController();
                echo "Nada";
                break;
        }
    }
    
    public function showPage()
    {
        $this->page->show();
    }
    
    public function showResponse()
    {
        $this->controller->handleRequest();
    }
}


