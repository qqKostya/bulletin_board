<?php require_once __DIR__ . '/rubricList.php'; ?>
<?php include 'includes/header.php'; ?>

<form method="POST" action="">
    <label for="category">Выберите рубрику:</label>
    <select name="category" id="category">
        <?php
        while ($row = mysqli_fetch_assoc($category_result)) {
            echo "<option value='" . $row['id'] . "'>" . $row['name'] . "</option>";
        }
        ?>
    </select>
    <br>
    <label for="title">Заголовок объявления:</label>
    <input type="text" name="title" id="title" required>
    <br>
    <label for="description">Текст объявления:</label>
    <textarea name="description" id="description" required></textarea>
    <br>
    <input type="submit" value="Разместить объявление">
</form>




<a href="categories.php">Посмотреть рубрики</a>

<a href="advertisements.php">Посмотреть все объявления</a>

<?php include 'includes/footer.php'; ?>