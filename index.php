<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HTML with PHP</title>
</head>
<body>
    <h1>Welcome to My Website</h1>

    <?php
    // Include the PHP file
    include('process.php');
    ?>

    <p><?php echo $message; ?></p>
    <p><?php echo $output; ?></p>

    <p>This is a static HTML content.</p>
</body>
</html>