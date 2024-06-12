<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Example</title>
    <style>
        /* CSS styles */
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 20px;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            color: #333;
        }
        p {
            color: #666;
        }
    </style>
</head>
<body>

    <div class="container">
        <!-- PHP code embedded within HTML -->
        <h1>Welcome <?php echo "to my website!"; ?></h1>

        <p>Today's date is <?php echo date("Y-m-d"); ?></p>

        <p><?php
            // Example of using PHP to generate HTML dynamically based on conditions
            $is_logged_in = true;
            if ($is_logged_in) {
                echo "You are logged in.";
            } else {
                echo "Please log in to access this content.";
            }
        ?></p>
    </div>

</body>
</html>
