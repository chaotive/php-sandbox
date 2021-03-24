<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>php-sandbox</title>
</head>
<body>

<h1>Welcome to the PHP sandbox!</h1>
<div>It is now <?php echo date("Y-m-d H:i:s"); ?></div>
<div>This is the service content: <?php echo file_get_contents('http://localhost:8080'); ?></div>
<div>This is the service content, other endpoint: <?php echo file_get_contents('http://localhost:8080/test'); ?></div>

</body>
</html>