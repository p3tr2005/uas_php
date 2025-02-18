<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    require_once "database.php";

    $name = htmlspecialchars($_POST["name"]);
    $email = htmlspecialchars($_POST["email"]);
    $role = htmlspecialchars($_POST["role"]);
    $gender = htmlspecialchars($_POST["gender"]);

    if (empty($name) || empty($email) || empty($role) || empty($gender)) {
        echo "
            <script>
                alert('All fields are required!');
            </script>
        ";

        header("Location: /?page=new-profile");
        exit;
    }


    $stmt = $db->prepare("INSERT INTO profile (name, email, role, gender) VALUES (?, ?, ?, ?)");

    $stmt->bindParam(1, $name, PDO::PARAM_STR);
    $stmt->bindParam(2, $email, PDO::PARAM_STR);
    $stmt->bindParam(3, $role, PDO::PARAM_STR);
    $stmt->bindParam(4, $gender, PDO::PARAM_STR);

    $stmt->execute();


    echo "
        <script>
            alert('Profile created successfully!');
        </script>
    ";

    header("Location: /");
    exit;
}
