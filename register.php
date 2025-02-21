<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    require_once "database.php";

    $name = htmlspecialchars($_POST["name"]);
    $email = htmlspecialchars($_POST["email"]);
    $password = htmlspecialchars($_POST["password"]);
    $role = htmlspecialchars($_POST["role"]);

    if (empty($name) || empty($email) || empty($password) || empty($role)) {
        echo "
            <script>
                alert('all fields are required!');
                window.location.href = '/?page=create-account';
            </script>
        ";

        exit;
    }

    $existingUser = $db->query("SELECT * FROM users WHERE email = '$email'")->fetch();

    if ($existingUser) {
        echo "
            <script>
                alert('invalid credentials!');

                window.location.href = '/?page=create-account';
            </script>
        ";
        exit;
    }

    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    $stmt = $db->prepare("INSERT INTO users (name, email, password, role) VALUES (?, ?, ?, ?)");

    $stmt->bindParam(1, $name);
    $stmt->bindParam(2, $email);
    $stmt->bindParam(3, $hashedPassword);
    $stmt->bindParam(4, $role);

    $stmt->execute();

    echo "
        <script>
            alert('Account successfully created!');

            window.location.href = '/?page=sign-in';
        </script>
    ";

    exit;
}
