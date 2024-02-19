<?php
    session_start();

    include("database.php");

    if ($_SERVER['REQUEST_METHOD']== "POST")
    {
        $firstname = $_POST ['fname'];
        $lastname = $_POST ['lname'];
        $gender = $_POST ['gender']; 
        $num = $_POST ['cnum'];
        $address = $_POST ['address'];
        $email = $_POST ['email'];
        $password = $_POST ['password'];

        if (!empty($email) && !empty($password) && !is_numeric($email))
        {
           
            $query = "INSERT INTO form1 (fname,lname,gender,cnum,address,email,password) values ( '$firstname','$lastname','$gender','$num','$address','$email','$password')";

            mysqli_query($con, $query);

            echo "<script type ='text/javascript'> alert('successfully register')</script>";

        } 
        else
        {
            echo "<script type = 'text/javascript'> alert('the information entered is invalid')</script>";
        }


    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>signup document</title>
    <link rel="stylesheet" href="x.css">
</head>
<body>
    <div class="signup">
        <h1>Sign Up</h1>
        <form method="POST">
            <label >First Name</label>
            <input type="text" name ="fname">
            <label >Last Name</label>
            <input type="text" name ="lname">`
            <label >Gender</label>
            <input type="text" name ="gender">
            <label >contacts</label>
            <input type="number" name = "cnum">
            <label >address</label>
            <input type="text" name = "address">
            <label >Email</label>
            <input type="Email" name ="email">
            <label >Password</label>
            <input type="password" name ="password">
            <input type="submit" name ="" value="submit">
        </form>
        <p>By clicking the submit button you agree to follow terms and conditions<br>
        <a href="">Terms and Conditions</a> and <a href="">Policy Privacy</a>
        <br> <br>Aready have an accout? <a href="login.php">Login Here</a>
        </p>

    </div>
    
</body>
</html>