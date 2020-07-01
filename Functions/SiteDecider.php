<?php
    
if ($_SERVER["REQUEST_METHOD"]== "GET")
{
    if ($GLOBALS['Decider'] == "pageHeader"){
    
        if (isset($_GET['forside'])) {
            echo 'Forside';
        }
        else if(isset ($_GET['skal-opgave'])){
            echo 'Skal-Opgave';
        }
        else if(isset ($_GET['kontaktinfo'])){
            echo 'Kontaktinfo';
        }
        else{
            echo 'CV';
        }
    }
else{
        if (isset($_GET['forside'])) {
            include 'Content/Forside.php';
        }
        else if(isset ($_GET['skal-opgave'])){
            echo 'Skal-Opgave';
        }
        else if(isset ($_GET['kontaktinfo'])){
            echo 'Kontaktinfo';
        }
        else{
            echo 'CV';
        }
        
    }
}
else{
    include_once 'Content/IkkeHer.php';
}

