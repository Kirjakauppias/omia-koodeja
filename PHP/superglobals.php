<?php

//SUPERGLOBALS,  PHP super global variable which is used to access global variables from anywhere in the PHP script (also from within functions or methods).
$_SERVER;                               //PHP super global variable which holds information about headers, paths, and script locations.
$_SERVER['REQUEST_METHOD'];	            //Returns the request method used to access the page (such as POST).

$_REQUEST;                              //PHP super global variable which is used to collect data after submitting an HTML form.
?>
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
    Name: <input type="text" name="fname">
    <input type="submit">
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // collect value of input field
    $name = $_REQUEST['fname'];
    if (empty($name)) {
      echo "Name is empty";
    } else {
      echo $name;
    }
}

$_POST;                                 //PHP super global variable which is used to collect form data after submitting an HTML form with method="post". 
                                        //$_POST is also widely used to pass variables.
                                        //Developers prefer POST for sending form data.
?>
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
    Name: <input type="text" name="fname">
    <input type="submit">
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // collect value of input field
    $name = $_POST['fname'];
    if (empty($name)) {
      echo "Name is empty";
    } else {
      echo $name;
    }
  }

$_GET;                                  //PHP super global variable which is used to collect form data after submitting an HTML form with method="get".   
                                        //$_GET can also collect data sent in the URL.
                                        //GET should NEVER be used for sending passwords or other sensitive information!    
?>
<a href="test_get.php?subject=PHP&web=W3schools.com">Test $GET</a> 
<?php                                       //When a user clicks on the link "Test $GET", the parameters "subject" and "web" are sent to "test_get.php", 
                                        //and you can then access their values in "test_get.php" with $_GET.
echo "Study " . $_GET['subject'] . " at " . $_GET['web']; 