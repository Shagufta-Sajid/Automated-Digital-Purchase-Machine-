<?php
echo "Received data: ";
//print_r($_POST);
$servername = "localhost";
$username = "fardin";   //your database username
$password = "fardin";  // your database password
$dbname = "micro_lab";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Set parameters
$product_id = isset($_POST["product_id"]) && !empty($_POST["product_id"]) ? $_POST["product_id"] : null;

// Validate parameters
if (!$product_id) {
  die("Error: product_id is empty");
} else {
  echo $product_id;
}

echo "Debugging statements: <br>";
echo "POST data: <br>";
print_r($_POST);
echo "product_id: $product_id <br>";


// Prepare and bind the statement

$stmt = $conn->prepare("INSERT INTO purchase (p_code) VALUES (?)");
$stmt->bind_param("s", $product_id);

// Execute the statement
if ($stmt->execute() === TRUE) {
  echo "Data inserted successfully";
} else {
  echo "Error: " . $stmt->error;
}

// Close the statement and connection
$stmt->close();
$conn->close();
?>

