<?php

class basePage
{
    public function show()
    {
        echo "<html><head>";
        $this->head();
        echo "</head><body>";
        $this->body();
        echo "</body></head>";
    }
 //------------------------------------------------------------------------------------------------------------------------------   
    protected function head()
    {
        echo "
                <meta charset='UTF-8'>
                <meta name='viewport' content='width=device-width, initial-scale=1'>
                <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css'>
                <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css'>
                <script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js'></script>
                <title>Portfolio</title>";
    }
 //------------------------------------------------------------------------------------------------------------------------------   
    protected function body()
    {
        $this->showHeader();
        $this->showMenu();
        $this->showContent();
        $this->showFooter();
    }
  //------------------------------------------------------------------------------------------------------------------------------   
    protected function showHeader()
    {
               echo "<div class='container-fluid'>
                <div class= 'header'>
                <h1>Portfolio - Melvin Mukrab</h1>
                </div>
              </div>";
    }
 //------------------------------------------------------------------------------------------------------------------------------   
    protected function showMenu()
    {
        $menuitems = array('home', 'animation', 'games', 'art', 'about', 'contact');
        echo "<div class='container'>
                <div class='nav nav-tabs'>";
            foreach($menuitems as $page => $title)
            {
                echo "<li><a href='index.php?page=".$title."'>".$title."</a></li>";
            }
        echo "</div>    
            </div>";
    }
 //------------------------------------------------------------------------------------------------------------------------------   
    protected function showContent()
    {
        
    }
 //------------------------------------------------------------------------------------------------------------------------------   
    protected function showFooter()
    {
        
    }
}

