<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <a class="navbar-brand" href="#">Intake</a>
    </nav>

<!--Assign post variables to other variable names-->
<?php
if(isset($_POST['newpatientintake'])) {

    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $birthmonth = $_POST['birthmonth'];
    $dayofmonth = $_POST['dayofmonth'];
    $birthyear = $_POST['birthyear'];
    $ethnicity = $_POST['ethnicity'];
    $race = $_POST['race'];
    $gender = $_POST['gender'];
    $street = $_POST['street'];
    $unit = $_POST['unit'];
    $city = $_POST['city'];
    $states = $_POST['states'];
    $zip = $_POST['zip'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $maritalstatus = $_POST['maritalstatus'];
    $children = $_POST['children'];
    //$checkintime = $_POST['checkintime'];
    //$status = $_POST['status'];

//sql insert
$servername = "localhost";
$username = "ctyrholm";
$password = "I2N1qlfUtljZ9ZUH";
$dbname = "ctyrholm";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

//add all columns from database to insert them
$sql = "INSERT INTO intake (firstname, lastname, birthmonth, dayofmonth, birthyear, ethnicity, race, gender, street, unit, city, states, zip, phone, email, maritalstatus, children)
VALUES ('{$_POST['firstname']}','{$_POST['lastname']}','{$_POST['birthmonth']}','{$_POST['dayofmonth']}','{$_POST['birthyear']}','{$_POST['ethnicity']}','{$_POST['race']}','{$_POST['gender']}','{$_POST['street']}','{$_POST['unit']}','{$_POST['city']}','{$_POST['states']}','{$_POST['zip']}','{$_POST['phone']}','{$_POST['email']}','{$_POST['maritalstatus']}','{$_POST['children']}')";

if ($conn->query($sql) === TRUE) {

//stop php and put thank you statement to return when data is inserted
?>
    <div class="container">
        <div class="row">
            <div class="md-col-12">
                <br>
                <br>
                <h3>Thank you for signing in. Please return the tablet, take a seat, and you will be called as soon as possible.</h3>
            </div>
        </div>
    </div>
<?php

} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

} else {
    header("Location: index.php");
}
?>


    <!-- jQuery library -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>