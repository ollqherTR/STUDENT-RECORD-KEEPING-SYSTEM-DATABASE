
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    

    $dsn ="mysql:host=localhost;dbname=test";
    $dbusername ="root";
    $dbpassword ="";

    try{
        $pdo = new PDO($dsn , $dbusername, $dbpassword);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch(PDOException $e){
        echo " connection failed". $e->getMessage();
    }
    echo "hello world"
?>
    </body>
</html>