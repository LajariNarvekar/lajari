<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image and Text Webpage</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

<header>
    <h1>Welcome to My Website</h1>
</header>

<main>
    <div class="container">
        <div class="image">
            <img src="image.jpg" alt="Image">
        </div>
        <div class="text">
            <?php
            $text = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                     Sed et sapien a odio efficitur luctus.";
            echo "<p>$text</p>";
            ?>
        </div>
    </div>
</main>

<footer>
    <p>&copy; <?php echo date("Y"); ?> My Website</p>
</footer>

</body>
</html>