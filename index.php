<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/css/style.css" />
    <title>Home</title>
</head>

<body>
    <?php require_once "database.php";

    if ($_SERVER["REQUEST_METHOD"] === "GET") {
        $page = $_GET["page"] ?? "";

        switch ($page) {
            case '':
                $profiles = $db->query("SELECT id, name, email, gender, createdAt FROM profile")->fetchAll();

                require_once "home.php";
                break;
            case 'detail':
                $id = $_GET["id"] ?? "";

                if (empty($id)) {
                    echo "
                        <script>
                            alert('ID is required!');
                            window.location.href = '/';
                        </script>
                    ";
                }

                $profile = $db->query("SELECT * FROM profile WHERE id = '$id'")->fetch();

                require_once "detail.php";
                break;
            case 'delete-profile':
                require_once "delete-profile.php";
                break;

            case 'new-profile':
                require_once "new-profile.php";
                break;
            default:
                require_once "404.php";
                break;
        }
    }
    ?>
</body>

</html>