<?php
    
if ($_SERVER["REQUEST_METHOD"]== "GET")
{
    if ($GLOBALS['Site'] == "pageHeader"){
    
        echo 'PageHeader';
    }
else{
    
        echo 'PageContent'; 
    }
}
else{
    include_once 'Content/IkkeHer.php';
}

