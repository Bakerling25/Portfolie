<?php
    $test = $GLOBALS['Site'];
if ($_SERVER["REQUEST_METHOD"]== "GET")
{
    if ($GLOBALS['Site'] == "Forside"){
    
        include_once 'Content/Forside.php';
    }
else{
    
        echo 'PlaceholderText'; 
    }
}
else{
    include_once 'Content/IkkeHer.php';
}

