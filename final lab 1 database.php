<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Lab";


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

/*$sql = "CREATE DATABASE Lab2";
if ($conn->query($sql) === TRUE) {
  echo "Database created successfully";
} else {
  echo "Error creating database: " . $conn->error;
}
$conn->close();*/

$sql = "CREATE TABLE `lab`.`crud` (`id` INT(10) NOT NULL , `firstname` VARCHAR(50) NOT NULL , `lastname` VARCHAR(30) NOT NULL , `email` VARCHAR(50) NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;";

if ($conn->query($sql) === TRUE) {
  echo "Created successfully";
} else {
  echo "Error creating table: " . $conn->error;
}


$sql = "INSERT `lab`.`crud` (firstname, lastname, email)
VALUES ('Afrina', 'Nirjona', 'afrina@aiub.edu')";

if ($conn->query($sql) === TRUE) {
  echo "  Adding Successful";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}


$sql = "UPDATE `lab`.`crud` SET firstname='Afrina Amir', lastname='nirjona', email='nirjonaamir@gmail.com' WHERE id=33";

if ($conn->query($sql) === TRUE) {
  echo "    Record updated successfully";
} else {
  echo "Error updating record: " . $conn->error;
}
$conn->close();


?>