<?php
$lifeTime =14400;
try   
{  
    session_start();  
    setcookie( session_name(), session_id(), time() + $lifeTime, "/" );  
}   
catch ( Exception $e )  
{  
    session_set_cookie_params( $lifeTime );  
    session_start();  
}  

echo $_SESSION['SafeCode'];
?>