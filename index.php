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
    session_start();

    if ($_SERVER["REQUEST_METHOD"] === "GET") {
        $page = $_GET["page"] ?? "";

        $isLoggedIn = $_SESSION["email"];

        switch ($page) {
            case '':
                $profiles = $db->query("SELECT id, name, email, gender, createdAt FROM profile")->fetchAll();

                if (empty($isLoggedIn)) {
                    header("Location: ?page=sign-in");
                };

                $isAdmin = isset($_SESSION["role"]) && $_SESSION["role"] === "admin";

                require_once "home.php";
                break;
            case 'users':
                $users = $db->query("SELECT * from users")->fetchAll();

                require_once "users.php";
                break;
            case 'sign-in':

                if (!empty($isLoggedIn)) {
                    header("Location: /");
                }

                require_once "sign-in.php";
                break;
            case 'create-account':
                if (!empty($isLoggedIn)) {
                    header("Location: /");
                }

                require_once "create-account.php";
                break;
            case 'detail':
                if (empty($isLoggedIn)) {
                    header("Location: ?page=sign-in");
                };

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
                if (empty($isLoggedIn)) {
                    header("Location: ?page=sign-in");
                };

                require_once "delete-profile.php";
                break;

            case 'new-profile':
                if (empty($isLoggedIn)) {
                    header("Location: ?page=sign-in");
                };

                require_once "new-profile.php";
                break;
            case 'logout':
                require_once "logout.php";

                break;
            default:
                require_once "404.php";
                break;
        }
    }
    ?>
</body>

</html>