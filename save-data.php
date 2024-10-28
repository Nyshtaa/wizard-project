<?php
$servername = "localhost"; // Задайте ваш сервер
$username = " "; // Ваше ім'я користувача
$password = " "; 
$dbname = "wordpress"; 

// Створіть з'єднання
$conn = new mysqli($servername, $username, $password, $dbname);

// Перевірте з'єднання
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Отримайте дані з POST запиту
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$quantity = $_POST['quantity'];
$price = $_POST['price'];

// Підготуйте SQL запит
$sql = "INSERT INTO wizard_data (name, email, phone, quantity, price) VALUES (?, ?, ?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("sssis", $name, $email, $phone, $quantity, $price);

if ($stmt->execute()) {
    echo "Data saved successfully!";
} else {
    echo "Error: " . $stmt->error;
}

// Закрийте з'єднання
$stmt->close();
$conn->close();
?>
