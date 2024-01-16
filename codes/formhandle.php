
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $pwd = $_POST["pwd"];
    $email = $_POST["email"];

    try {
        require_once "elma.php";
        $query = "INSERT INTO deneme (username, pwd, email) VALUES (?, ?, ?)";
        $stmt = $pdo->prepare($query);
        $stmt->execute([$username, $pwd, $email]);

        $pdo = null;
        $stmt = null;
        header("Location: ../kodlar/test.php");
        die();
    } catch (PDOException $e) {
        die("Query Failed: " . $e->getMessage());
    }
} else {
    header("Location: ../kodlar/test.php");
}

