<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resource Monitor</title>
</head>
<body>
    <h1>Resource Monitor</h1>

    <?php
    // Include the PHP file
    $cpu_info = shell_exec("python system_monitoring.py cpu");
    $memory_info = shell_exec("python system_monitoring.py memory");


    $decoded_cpu_info = json_decode($cpu_info);
    $decoded_memory_info = json_decode($memory_info);

    if ($decoded_cpu_info !== null) {
        echo "CPU info is valid JSON.";
    } else {
        echo "CPU info is not valid JSON.";
    }

    if ($decoded_memory_info !== null) {
        echo "Memory info is valid JSON.";
    } else {
        echo "Memory info is not valid JSON.";
    }

    ?>
    <h4>Informasi CPU: <?php echo $cpu_info; ?></h4>
    <p>Physical cores: <?php echo $decoded_cpu_info->physical_cores; ?></p>
    <h4>Informasi Memori: <?php echo $memory_info; ?></h4>

    <p>This is a static HTML content.</p>
</body>
</html>