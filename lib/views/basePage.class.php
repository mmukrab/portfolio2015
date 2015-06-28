<?php

class basePage
{
    protected function head()
    {
        echo "
                <meta charset='UTF-8'>
                <meta name='viewport' content='width=device-width, initial-scale=1'>
                <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css'>
                <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css'>
                <script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js'></script>";
    }
    
    protected function body()
    {
        $this->showHeader();
        $this->showMenu();
        $this->showContent();
        $this->showFooter();
    }
    
    protected function showHeader()
    {
        echo "<header>
                <title>
                </title>
                </header>";
    }
}

