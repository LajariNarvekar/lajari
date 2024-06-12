<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Webpage</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

<header>
    <h1>Welcome to My PHP Webpage</h1>
</header>

<main>
    <div class="container">
        <h2>Current Date and Time</h2>
        <p>
            <?php
            echo "Today is " . date("l") . "<br>";
            echo "The time is " . date("h:i:s a");
            ?>
        </p>
    </div>
</main>

<footer>
    <p>&copy; <?php echo date("Y"); ?> My PHP Webpage</p>
</footer>

</body>
</html>