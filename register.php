<?php
include 'login.php';
echo <<<_END
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body style="background-color:white;">
    <h2 style="text-align: center;font-size:40px">Registration</h2>
    <form action="register.php" style="font-size:20px" method="post">
        <label for="firstName">First Name:</label><br>
        <input type="text" name="Fname" id="firstName"><br>
        <label for="lastName">Last Name:</label><br>
        <input type="text" name="Lname" id="lastName"><br><br>
        <label for="gender">Gender</label><br>
        <input type="radio" id="gender" name="gender" value="male">Male <br>
        <input type="radio" id="gender" name="gender" value="female">Female <br>
        <input type="radio" id="gender" name="gender" value="other">Other <br><br>
        <label for="education">Education</label>
        <select name="qualification" id="education">
            <option value="school">School Student</option>
            <option value="ug" selected>Under Graduate</option>
            <option value="pg">Post Graduate</option>
            <option value="working">Working</option>
        </select><br><br>
        <label for="code">Coures Code:</label><br>
        <input type="text" id="code" name="coursecode"><br><br>
        <label for="country">Country:</label>
        <input type="text" id="country" name="country"><br><br>
        <label for="state">State:</label>
        <input type="text" id="state" name="state">
        <label for="city">City:</label>
        <input type="text" id="city" name="city"><br><br>
        <label for="pin">Pincode:</label>
        <input type="text" id="pin" name="pincode">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email"><br><br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password"><br>
        (Should contain 4-16 char ; at-least one number and special char) <br><br>
        <input type="submit" value="Register" style="font-size:18px;width:100px">
        <input type="reset" value="Reset" style="font-size:18px;width:80px">
    </form>
</body>
</html>
_END;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
$fname=$_POST['Fname'];
$lname=$_POST['Lname'];
$gender=$_POST['gender'];
$education=$_POST['qualification'];
$c_code=$_POST['coursecode'];
$country=$_POST['country'];
$state=$_POST['state'];
$city=$_POST['city'];
$pin=$_POST['pincode'];
$email=$_POST['email'];
$password=$_POST['password'];
$sql_query="insert into registration(first_name,last_name,gender,education,course_code,country,state,city,pincode,email,password)values('$fname','$lname','$gender','$education','$c_code','$country','$state','$city','$pin','$email','$password')";
if ($conn->query($sql_query) === TRUE) {
    echo "Data registered successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
}
?>