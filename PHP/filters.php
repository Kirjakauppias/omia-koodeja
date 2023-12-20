<?php

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