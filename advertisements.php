<?php include './connectDBprivate.php'; ?>
<?php include 'includes/header.php'; ?>

<h2>Все объявления</h2>

<?php
// Запрос на выборку всех категорий
$categories_query = "SELECT * FROM categories";
$categories_result = mysqli_query($conn, $categories_query);

while ($category = mysqli_fetch_assoc($categories_result)) {
    echo "<h3>" . $category['name'] . "</h3>";

    // Запрос на выборку объявлений для текущей категории
    $category_id = $category['id'];
    $advertisements_query = "SELECT * FROM advertisements WHERE category_id = $category_id";
    $advertisements_result = mysqli_query($conn, $advertisements_query);

    if (mysqli_num_rows($advertisements_result) > 0) {
        while ($ad = mysqli_fetch_assoc($advertisements_result)) {
            echo "<h4>" . $ad['title'] . "</h4>";
            echo "<p>" . $ad['description'] . "</p>";
        }
    } else {
        echo "<p>Пока нет объявлений в этой категории.</p>";
    }

    echo "<hr>";
}
?>

<p><a href="index.php">Вернуться</a></p>

<?php include 'includes/footer.php'; ?>