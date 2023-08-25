<?php
require_once __DIR__ . '/connectDBprivate.php';


// Обработка отправки формы
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $category_id = $_POST["category"];
    $title = $_POST["title"];
    $description = $_POST["description"];

    $sql = "INSERT INTO advertisements (category_id, title, description) VALUES ('$category_id', '$title', '$description')";

    if (mysqli_query($conn, $sql)) {
        header("Location: thank_you.php"); // Переадресация на страницу "Спасибо"
        exit();
    } else {
        echo "Ошибка: " . $sql . "<br>" . mysqli_error($conn);
    }
}
