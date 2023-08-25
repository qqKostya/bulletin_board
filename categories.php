<?php include './connectDBprivate.php'; ?>
<?php include 'includes/header.php'; ?>

<h2>Доступные рубрики</h2>

<ul>
    <?php
    $category_query = "SELECT * FROM categories";
    $category_result = mysqli_query($conn, $category_query);

    while ($row = mysqli_fetch_assoc($category_result)) {
        echo "<li>" . $row['name'] . "</li>";
    }
    ?>
</ul>

<?php include 'includes/footer.php'; ?>