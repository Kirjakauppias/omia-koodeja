<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<?php
//STRINGS
    strlen();           //function returns the length of a string.
    str_word_count();   //function counts the number of words in a string.
    strpos();           //function searches for a specific text within a string.
    strtoupper();       //function returns the string in UPPER CASE.
    strtolower();       //function returns the string in lower case.
    str_replace();      //function replaces some characters with some other characters in a string.
    strrev();           //function reverses a string.
    trim();             //removes any whitespace from the beginning or the end.
    explode();          //function splits a string into an array.

    substr();           //Specify the start index and the number of characters you want to return. The first character has index 0.
                        //By leaving out the length parameter, the range will go to the end.
                        //Use negative indexes to start the slice from the end of the string.
                        //Use negative length to specify how many characters to omit, starting from the end of the string.

//NUMBERS
    is_numeric();       //function can be used to find whether a variable is numeric.
    pi();               //function returns the value of PI.
    min(); max();       //functions can be used to find the lowest or highest value in a list of arguments.
    abs();              //function returns the absolute (positive) value of a number.
    sqrt();             //function returns the square root of a number.
    round();            //function rounds a floating-point number to its nearest integer.
    rand();             //function generates a random number.

//CONSTANTS
    define(name, value);  //To create a constant, use the define() function.
                                            /*Parameters:
                                            name: Specifies the name of the constant
                                            value: Specifies the value of the constant
                                            case-insensitive: Specifies whether the constant name 
                                            should be case-insensitive. Default is false.*/ 
    const NAME = "Name";                    //You can also create a constant by using the const keyword.

//IF-STATEMENTS
    switch (expression) {
        case label1:
            //code block
            break;
        case label2:
            //code block
            break;
        default:
            //code block
    }

//LOOPS (WHILE, DO...WHILE, FOR, FOREACH)
    $colors = array("red", "green", "blue", "yellow");
    foreach ($colors as $x) {
        echo "$x <br>";
    }

//FUNCTIONS
    function functionName(string $arguments){
        //code block
    }
    
    declare(strict_types=1);                //The strict declaration forces things to be used in the intended way.
                                            //This must be on the very first line of the PHP file.
    
//ARRAYS
    array();                                //function is used to create an array.
    $cars = array("Volvo", "BMW", "Toyota");

    count();                                //function is used to return the length (the number of elements) of an array.

    $cars = array("Volvo", "BMW", "Toyota");//Loop Through an Indexed Array.
    $arrlength = count($cars);
    for($x = 0; $x < $arrlength; $x++) {   
        echo $cars[$x];
        echo "<br>";
    }

    $age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43"); //Associative arrays are arrays that use named keys that you assign to them.
    echo "Peter is " . $age['Peter'] . " years old.";

    $age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43"); //Loop Through an Associative Array.
    foreach($age as $x => $x_value) {     
        echo "Key=" . $x . ", Value=" . $x_value;
        echo "<br>";
    }

    $cars = array (                         //Two-dimensional Arrays.
        array("Volvo",22,18),
        array("BMW",15,13),
        array("Saab",5,2),
        array("Land Rover",17,15)
      );

    for ($row = 0; $row < 4; $row++) {
        echo "<p><b>Row number $row</b></p>";
        echo "<ul>";
        for ($col = 0; $col < 3; $col++) {
          echo "<li>".$cars[$row][$col]."</li>";
        }
        echo "</ul>";
    }

    sort();                                 //sort arrays in ascending order.
    rsort();                                //sort arrays in descending order.
    asort();                                //sort associative arrays in ascending order, according to the value.
    ksort();                                //sort associative arrays in ascending order, according to the key.
    arsort();                               //sort associative arrays in descending order, according to the value.
    krsort();                               //sort associative arrays in descending order, according to the key.

    $cars = array("Volvo", "BMW", "Toyota");
    sort($cars);
    $age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
    asort($age);

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
    
//FORMS    
?>
    <form action="welcome.php" method="post">
        Name: <input type="text" name="name"><br>
        E-mail: <input type="text" name="email"><br>
        <input type="submit">
    </form>

    Welcome <?php echo $_POST["name"]; ?><br>
    Your email address is: <?php echo $_POST["email"]; ?>
<?php

//PHP FORM VALIDATION
    //Name	Required. + Must only contain letters and whitespace
    //E-mail	Required. + Must contain a valid email address (with @ and .)
    //Website	Optional. If present, it must contain a valid URL
    //Comment	Optional. Multi-line input field (textarea)
    //Gender	Required. Must select one
?>
    <!--The name, email, and website fields are text input elements, and the comment field is a textarea.-->
    Name: <input type="text" name="name">
    E-mail: <input type="text" name="email">
    Website: <input type="text" name="website">
    Comment: <textarea name="comment" rows="5" cols="40"></textarea>   

    <!--The gender fields are radio buttons-->
    Gender:
    <input type="radio" name="gender" value="female">Female
    <input type="radio" name="gender" value="male">Male
    <input type="radio" name="gender" value="other">Other

    <!--Form element
    The $_SERVER["PHP_SELF"] is a super global variable that returns the filename of the currently executing script.
    The htmlspecialchars() function converts special characters to HTML entities. This means that it will replace HTML characters 
    like < and > with &lt; and &gt;. This prevents attackers from exploiting the code by injecting HTML or Javascript code 
    (Cross-site Scripting attacks) in forms.-->
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
<?php
        //The $_SERVER["PHP_SELF"] variable can be used by hackers!
        //Cross-site scripting (XSS) is a type of computer security vulnerability typically found in Web applications. 
        //XSS enables attackers to inject client-side script into Web pages viewed by other users.
        //The htmlspecialchars() function converts special characters to HTML entities. 
        
        //define variables and set to empty values
        $name = $email = $gender = $comment = $website = "";
        //whether the form has been submitted using $_SERVER["REQUEST_METHOD"]. If the REQUEST_METHOD is POST, 
        //then the form has been submitted - and it should be validated. 
        //If it has not been submitted, skip the validation and display a blank form.

        //However, in the example above, all input fields are optional. The script works fine even if the user does not enter any data.
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $name = test_input($_POST["name"]);
            $email = test_input($_POST["email"]);
            $website = test_input($_POST["website"]);
            $comment = test_input($_POST["comment"]);
            $gender = test_input($_POST["gender"]);
        }

        //we can check each $_POST variable with the test_input() function
        function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }

        /*In the following code we have added some new variables: $nameErr, $emailErr, $genderErr, and $websiteErr. 
        These error variables will hold error messages for the required fields. We have also added an if else statement for each $_POST variable. 
        This checks if the $_POST variable is empty (with the PHP empty() function). If it is empty, an error message is stored in the different 
        error variables, and if it is not empty, it sends the user input data through the test_input() function:*/
        $nameErr = $emailErr = $genderErr = $websiteErr = "";

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (empty($_POST["name"])) {
              $nameErr = "Name is required";
            } else {
              $name = test_input($_POST["name"]);
            }
          
            if (empty($_POST["email"])) {
              $emailErr = "Email is required";
            } else {
              $email = test_input($_POST["email"]);
            }
          
            if (empty($_POST["website"])) {
              $website = "";
            } else {
              $website = test_input($_POST["website"]);
            }
          
            if (empty($_POST["comment"])) {
              $comment = "";
            } else {
              $comment = test_input($_POST["comment"]);
            }
          
            if (empty($_POST["gender"])) {
              $genderErr = "Gender is required";
            } else {
              $gender = test_input($_POST["gender"]);
            }
          }

//PHP - VALIDATE NAME
    //The code below shows a simple way to check if the name field only contains letters, dashes, apostrophes and whitespaces. 
    //If the value of the name field is not valid, then store an error message.
    //The preg_match() function searches a string for pattern, returning true if the pattern exists, and false otherwise.
    $name = test_input($_POST["name"]);
    if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
        $nameErr = "Only letters and white space allowed";
    }
    
//PHP - VALIDATE E-MAIL
    //The easiest and safest way to check whether an email address is well-formed is to use PHP's filter_var() function.
    //In the code below, if the e-mail address is not well-formed, then store an error message.
    $email = test_input($_POST["email"]);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $emailErr = "Invalid email format";
    }

//PHP - VALIDATE URL
    //The code below shows a way to check if a URL address syntax is valid (this regular expression also allows dashes in the URL). 
    //If the URL address syntax is not valid, then store an error message.
    $website = test_input($_POST["website"]);
        if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
        $websiteErr = "Invalid URL";
    }

//PHP - KEEP THE VALUES IN THE FORM
    /*To show the values in the input fields after the user hits the submit button, we add a little PHP script inside the value 
    attribute of the following input fields: name, email, and website. In the comment textarea field, we put the script between 
    the <textarea> and </textarea> tags. The little script outputs the value of the $name, $email, $website, and $comment variables.
    
    Then, we also need to show which radio button that was checked. For this, we must manipulate the checked attribute (not the value attribute for radio buttons)*/
?>
    Name: <input type="text" name="name" value="<?php echo $name;?>">

    E-mail: <input type="text" name="email" value="<?php echo $email;?>">

    Website: <input type="text" name="website" value="<?php echo $website;?>">

    Comment: <textarea name="comment" rows="5" cols="40"><?php echo $comment;?></textarea>

    Gender:
    <input type="radio" name="gender"
    <?php if (isset($gender) && $gender=="female") echo "checked";?>
    value="female">Female
    <input type="radio" name="gender"
    <?php if (isset($gender) && $gender=="male") echo "checked";?>
    value="male">Male
    <input type="radio" name="gender"
    <?php if (isset($gender) && $gender=="other") echo "checked";?>
    value="other">Other

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

//PHP FILTERS
    //The PHP filter extension has many of the functions needed for checking user input, and is designed to make data validation easier and quicker.
    filter_list();                      //function can be used to list what the PHP filter extension offers.
?>
    <table>
        <tr>
            <td>Filter Name</td>
            <td>Filter ID</td>
        </tr>
        <?php
            foreach (filter_list() as $id =>$filter) {
                echo '<tr><td>' . $filter . '</td><td>' . filter_id($filter) . '</td></tr>';
            }
        ?>
    </table>
<?php
    filter_var();                       //function both validate and sanitize data.
                                        //function filters a single variable with a specified filter. It takes two pieces of data:
                                        //The variable you want to check.
                                        //The type of check to use.
    //Sanitize a string
    //remove all HTML tags from a string
    $str = "<h1>Hello World!</h1>";
    $newstr = filter_var($str, FILTER_SANITIZE_STRING);                                  
    echo $newstr;

    //Validate an integer
    //If $int is an integer, the output of the code below will be: "Integer is valid". 
    //If $int is not an integer, the output will be: "Integer is not valid".
    $int = 100;

    if (!filter_var($int, FILTER_VALIDATE_INT) === false) {
        echo("Integer is valid");
    } else {
        echo("Integer is not valid");
    }

    //if $int was set to 0, the function above will return "Integer is not valid". To solve this problem, use the code below.
    $int = 0;

    if (filter_var($int, FILTER_VALIDATE_INT) === 0 || !filter_var($int, FILTER_VALIDATE_INT) === false) {
        echo("Integer is valid");
    } else {
        echo("Integer is not valid");
    }

    //Sanitize and valitade an email address.
        $email = "john.doe@example.com";

        //Remove all illegal characters from email
        $email = filter_var($email, FILTER_SANITIZE_EMAIL);

        //Validate e-mail
        if (!filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
            echo("$email is a valid email address");
        } else {
            echo("$email is not a valid email address");
        }

    //Sanitize and validate a URL
        //first remove all illegal characters from a URL, then check if $url is a valid URL
        $url = "https://www.w3schools.com";

        // Remove all illegal characters from a url
        $url = filter_var($url, FILTER_SANITIZE_URL);

        // Validate url
        if (!filter_var($url, FILTER_VALIDATE_URL) === false) {
            echo("$url is a valid URL");
        } else {
            echo("$url is not a valid URL");
        }
?>                                    
</HTML>
</BODY>