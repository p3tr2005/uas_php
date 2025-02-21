<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    require_once "database.php";

    $email = htmlspecialchars($_POST["email"]);
    $password = htmlspecialchars($_POST["password"]);

    if (empty($email) || empty($password)) {
        echo "
            <script>
                alert('all fields are required!');
                window.location.href = '/?page=sign-in';
            </script>
        ";

        exit;
    }

    $existingUser = $db->query("SELECT * FROM users WHERE email = '$email'")->fetch();

    if (empty($existingUser)) {
        echo "
            <script>
                alert('invalid credentials!');

                window.location.href = '/?page=sign-in';
            </script>
        ";
        exit;
    }

    $isPasswordMatch = password_verify($password, $existingUser["password"]);

    if (!$isPasswordMatch) {
        echo "
        <script>
            alert('Invalid email or password!');

            window.location.href = '/?page=sign-in';
        </script>
    ";

        exit;
    }

    $_SESSION["user_id"] = $existingUser["id"];
    $_SESSION["email"] = $email;
    $_SESSION["role"] = $existingUser["role"];

    echo "
        <script>
            alert('Successfully sign in!');

            window.location.href = '/';
        </script>
    ";

    exit;
}
