<?php

//PHP - SESSIONS
session_start();                    //A session is started with the session_start() function.
//The session_start() function must be the very first thing in your document. Before any HTML tags.
session_unset();                    //Remove all session variables.
session_destroy();                  //Destroy the session.

//Set session variables
//new page called "demo_session1.php". In this page, we start a new PHP session and set some session variables.
session_start();
$_SESSION["favcolor"] = "green";
$_SESSION["favanimal"] = "cat";
echo "Session variables are set.";

//we create another page called "demo_session2.php". From this page, we will access the session information we set on the first page ("demo_session1.php").
//Also notice that all session variable values are stored in the global $_SESSION variable:
session_start();
//Echo session variables that were set on previous page
echo "Favorite color is " . $_SESSION["favcolor"] . ".<br>";
echo "Favorite animal is " . $_SESSION["favanimal"] . ".";

print_r($_SESSION);                 //Another way to show all the session variable values for a user session

// to change a session variable, just overwrite it
$_SESSION["favcolor"] = "yellow";