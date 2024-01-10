<?php
include 'login.php';
//html code
echo <<<_END
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registered Users</title>
</head>
<body style="background-color:navajowhite;">
    <h2><u>Registered Users:</u></h2>

_END;
$sql = "SELECT * FROM registration";
$result = $conn->query($sql);

// Check if there are rows in the result
if ($result->num_rows > 0) {
    // Output data of each row
    while ($row = $result->fetch_assoc()) {
        echo "First Name: " . $row["first_name"] ."<br>". " Last Name: " . $row["last_name"] ."<br>"."Gender: ".$row["gender"]."<br>"."Education: ".$row["education"]."<br>"."Course Code: ".$row["course_code"]."<br>"."Country: ".$row["country"]."<br>"."State: ".$row["state"]."<br>"."City: ".$row["city"]."<br>"."Pincode: ".$row["pincode"]."<br>"."Email: ".$row["email"]."<br><br>";
        // Add more columns as needed
    }
} else {
    echo "No data found";
}

echo <<<_END

        <h2><u>Queries:</u></h2>
    </body>
</html>
_END;
$sql = "SELECT * FROM query";
$result = $conn->query($sql);
//check if there is data or not
if($result->num_rows > 0) {
    // Output data of each row
    while ($row = $result->fetch_assoc()) {
        echo "Name: ".$row["name"]."<br>"."Course: ".$row["course"]."<br>"."Query: ".$row["query"]."<br><br>";
    }
}else{
    echo "No Queries Found.";
}
?>