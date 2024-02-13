<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Form</title>
</head>
<body>
    
    <?php
    if($_SERVER['REQUEST_METHOD']=='POST'){

    if(!empty($_REQUEST['fname'])){
        $firstname = $_REQUEST['fname'];
    }
    else {
        $firstname="";
        echo "please enter your first name <br>";
    }
    if(!empty($_REQUEST['lname'])){
        $lastname = $_REQUEST['lname'];
    }
    else {
        $lastname="";
        echo "please enter your last name <br>";
    }
    if ($lastname != "" && $firstname != ""){
        echo "<p>Thank you, $firstname $lastname for filling out the form  </p>";
    }
}
       $firstName = $_REQUEST['fname'];
       echo "Hello $firstname";
     ?>
     
    <form action="onepageform.php" method="post">
    First name: <input type="text" name="fname"><br>
    Last name: <input type="text" name="lname"><br>
    <input type="submit" value="Submit">
</form>

</body>
</html>