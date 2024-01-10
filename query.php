<?php
include 'login.php';
echo <<<_END
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Queries</title>
</head>

<body style="background-color:navajowhite">

    <h2 style="font-size:40px;text-align:center">User Queries</h2>
    <form action="query.php" method="post" style="font-size:20px">
       <label for="name">Name:</label><br>
       <input type="text" id="name" name="name"><br><br>
       <label for="course">Course Name:</label>
       <select name="course" id="course">
        <option value="python course">Python Course</option>
        <option value="web devleopment">Web Development</option>
       </select><br><br>
       <label for="query">Your Query:</label><br>
       <textarea name="query" id="query" cols="50" rows="5" placeholder="Type your Query here...."></textarea><br><br>
       <input type="submit" style="font-size: 18px">
    </form>
</body>

</html>
_END;
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $name=$_POST['name'];
    $course=$_POST['course'];
    $query=$_POST['query'];
    $sql_query="insert into query(name,course,query)values('$name','$course','$query')";
    if ($conn->query($sql_query) === TRUE) {
        echo "Query registered successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>