<?php

if (isset($_POST['name'])){

    //database connection deteil
    $servername="localhost";
    $username="root";
    $password="";
    $database="test";
    $port=3307;

    $con = mysqli_connect($servername,$username,$password,$database,$port);

    // if($conn->connect_error){
    //     die("connection faild". $conn->connect_error);
    // }
    // // echo "connected succesfully"


    if(!$con){
        die("Connection failed: ". $conn->connect_error());
    }
    
    $name = $_POST['name'];
    
    $age = $_POST['age'];
    
    $email = $_POST['email'];
    
    $gender = $_POST['gender'];
    
    $description = $_POST['desc'];

    //sql Query to insert data 
    $sql = "INSERT INTO trips (name, age, email, gender, description) 
            VALUES ('$name', '$age', '$email', '$gender', '$description')";

    if (mysqli_query($con, $sql)){
        header("location: index.php?success=true");
        exit();
    } else{
        echo "error" . mysqli_error($con);
    }

    //close the connection
    mysqli_close($con);
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Example</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form id="tripform" method="post">
        <center><h2>TRIP REGISTRATION FORM</h2></center>
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required><br><br>

        <label for="age">Age:</label>
        <input type="number" id="age" name="age" required><br><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>

        <label for="gender">Gender:</label>
        <input type="text" id="gender" name="gender"><br><br>

        <label for="desc">description:</label>
        <input type="text" id="desc" name="desc" required><br><br>

        <button id="submit">Submit</button>
    </form>


    <script src="script.js"></script>
</body>
</html>