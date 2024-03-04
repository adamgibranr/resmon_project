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
    <p>Total cores: <?php echo $decoded_cpu_info->total_cores; ?></p>
    <p>CPU usage per core: <?php foreach ($decoded_cpu_info->cpu_usage_per_core as $core => $usage) {
        echo "Core $core: $usage%\n";
    } ?>
    </p>
    <p>Processor speed: <?php echo $decoded_cpu_info->processor_speed; ?></p>
    
    <p>Total CPU usage: <?php echo $decoded_cpu_info->total_cpu_usage; ?></p>
    <h4>Informasi Memori: <?php echo $memory_info; ?></h4>
    <p>Total memory: <?php echo $decoded_memory_info->total_memory; ?></p>
    <p>Available memory: <?php echo $decoded_memory_info->available_memory; ?></p>
    <p>Used memory: <?php echo $decoded_memory_info->used_memory; ?></p>
    <p>Memory percentage: <?php echo $decoded_memory_info->memory_percentage; ?></p>

    <p>This is a static HTML content.</p>
</body>
</html>