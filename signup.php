<?php
    session_start();

    include("db.php");

    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        $firstname = $_POST['fname'];
        $lasttname = $_POST['lname'];
        $gender = $_POST['gender'];
        $phonum = $_POST['phonum'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        if(!empty($gmail) && !empty($password) && !is_numeric($gmail))
        {
             $query = "insert into form(fname, lname, gender, phonum, email, password) values ('$firstname', '$lastname', '$gender', '$phonum', '$email', '$password')";

             mysqli_query($con,query);

             echo "<script type='text/javascript'> alert('Succesfully Register')</script>";
        }
        {
            echo "<script type='text/javascript'> alert('Please Enter some Valid Information')</script>";
        }

    }

?>
 
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Login and Register</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="signup">
        <h1>Sign Up</h1>
        <h4> It's free and only takes a minute</h4>
        <form method="POST">
            <label>First Name</label>
            <input type="text" name="fname" required>
            <label>Last Name</label>
            <input type="text" name="lname" required>
            <label>Gender</label>
            <input type="text" name="gender" required>
            <label>Phone Number</label>
            <input type="text" name="phonum" required>
            <label>Email</label>
            <input type="email" name="email" required>
            <label>Password</label>
            <input type="password" name="password" required>
            <input type="submit" name="" value="Submit">
        </form>
        <p>By clicking the Sign Up button, you agree to our<br>
            <a href="">Terms and Condition</a> and <a href="#">Policy Privacy</a>
        </p>
        <p>Already have an account? <a href="login.php">Login Here</a></p>
    </div>

</body>

</html>