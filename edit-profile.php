<?php

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    require_once "database.php";

    $name = htmlspecialchars($_POST["name"]);
    $email = htmlspecialchars($_POST["email"]);
    $role = htmlspecialchars($_POST["role"]);
    $gender = htmlspecialchars($_POST["gender"]);

    $stmt = $db->prepare("UPDATE profile SET name = ?, email = ?, role = ?, gender = ? WHERE email = ?");

    $stmt->bindParam(1, $name, PDO::PARAM_STR);
    $stmt->bindParam(2, $email, PDO::PARAM_STR);
    $stmt->bindParam(3, $role, PDO::PARAM_STR);
    $stmt->bindParam(4, $gender, PDO::PARAM_STR);
    $stmt->bindParam(5, $email, PDO::PARAM_STR);

    $stmt->execute();

    echo "
        <script>
            alert('Profile updated successfully!');

            window.location.href = '/';
        </script>
    ";
}
