<?php
        
        $host = 'localhost';
        $user = 'root';
        $pass = '';
        $bd   = 'belchior';
 
    
        mysql_connect($host, $user, $pass) or die(mysql_error());
        mysql_select_db($bd) or die(mysql_error());
?>