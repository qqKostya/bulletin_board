<?php
require_once __DIR__ . '/form.php';
// Получение списка рубрик
$category_query = "SELECT * FROM categories";
$category_result = mysqli_query($conn, $category_query);
