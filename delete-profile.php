<?php

if ($_SERVER["REQUEST_METHOD"] === "GET") {
    $id = $_GET["id"];

    if (empty($id)) {
        echo "
            <script>
                alert('ID is required!');
                window.location.href = '/';
            </script>
        ";
    }

    $stmt = $db->prepare("DELETE FROM profile WHERE id = ?");

    $stmt->bindParam(1, $id);

    $stmt->execute();

    echo "
        <script>
            alert('Profile successfully deleted!');
            window.location.href = '/';
        </script>
    ";
}
