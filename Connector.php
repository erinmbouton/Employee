<?php
$servername = "localhost";
$username = "root";
$password = "tester";

// Create connection
$conn = mysqli_connect($servername, $username, $password);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";

// Create database
$sql = "CREATE DATABASE employee";
if (mysqli_query($conn, $sql)) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " . mysqli_error($conn);
}
// sql to create table
$sql = "CREATE TABLE Employee (
Employee_id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
firstname VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT NULL,
Date_of_Birth DATE,
Social_Security_Number TEXT,
Hire_Date DATE,
Gender TEXT,
Phone_Number INT(11),
Email_Address TEXT,
Street_Address TEXT,
Zipcode VARCHAR(5),
City TEXT,
State VARCHAR(5),
Country TEXT,
Annual_Salary INT(9),
Hourly_Rate INT(6),
Weekly_Rate INT(9),
Quarterly_Rate INT(9),
From_Date DATE,
To_Date DATE,
Overtime_Salary INT(9),
Department_Number INT(100),
Department_Name TEXT,
Employee_Title TEXT);
)";

$sql = "INSERT INTO Employee (Employee_id,firstname, lastname, Email_Address)
VALUES ('1234567890','John', 'Doe', 'john@example.com')";

if ($conn->query($sql) === TRUE) {
    echo "Table MyGuests created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

mysqli_close($conn);
?>
