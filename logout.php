<?php 
// Wird ausgeführt um mit der Ausgabe des Headers zu warten. 
ob_start (); 

session_start (); 
session_unset (); 
session_destroy (); 

header ("Location: index.html"); 
ob_end_flush (); 
mysql_close();
?> 