<?php

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
