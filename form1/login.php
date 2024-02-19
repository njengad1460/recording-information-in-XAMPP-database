<?php
session_start();

include("database.php");

if ($_SERVER['REQUEST_METHOD'] == "POST") 
{
    $email = $_POST['email'];
    $password = $_POST['password'];

    if (!empty($email) && !empty($password) && !is_numeric($email)) 
    
    {
        $query = "SELECT * FROM form1 WHERE email='$email' LIMIT 1";
        $result = mysqli_query($con, $query);

        if ($result) 
        {
            if ($result && mysqli_num_rows ($result) > 0) 
            {
                $user_data = mysqli_fetch_assoc($result);

                if ($user_data["password"]) 
                {
                    header("location: index.php");
                    die;
                }
                 
            } 
           
        } 
        else 
        {
            echo "<script type='text/javascript'> alert('Error in the query')</script>";
        }
    }
     else 
    {
        echo "<script type='text/javascript'> alert('Invalid email or password')</script>";
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
    
    <div class="login">
        <h1>Log In</h1>
        <form action="" method="POST">
            <label >Email</label>
            <input type="Email" name ="email">
            <label >password</label>
            <input type="password" name ="password">
            <input type="submit" name ="" value="submit">
        </form>
        <p>Not having an accout? signup <a href="signup.php">Hire</a></p>
    
</body>
</html>