<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple PHP Webpage</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

<header>
    <h1>Welcome to My Website</h1>
</header>

<nav>
    <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="about.php">About</a></li>
        <li><a href="contact.php">Contact</a></li>
    </ul>
</nav>

<main>
    <h2>Latest News</h2>
    <?php
    // Display latest news dynamically from a database or an array
    echo "<article>";
    echo "<h3>Breaking News</h3>";
    echo "<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed et sapien a odio efficitur luctus.</p>";
    echo "</article>";
    ?>
</main>

<footer>
    <p>&copy; <?php echo date("Y"); ?> My Website</p>
</footer>

</body>
</html>