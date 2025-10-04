<?Php

$_SESSION ["userList"] = ["Pedro", "Yixon", "Cr0wn777", "Forex", "VictorDev"];

function displayUsers()
{
    echo "<tr><th>Usernames</th></tr>";
    foreach ($_SESSION["userList"] as $user) {
        echo "<tr><td>" . htmlspecialchars($user) . "</td>";
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (isset($_POST['username']) && !empty($_POST['username'])) {
        $newUser = $_POST['username'];
        if (!in_array($newUser, $_SESSION["userList"])) {
            $_SESSION["userList"][] = $newUser;
        }
    }

    if (isset($_POST['oldUsername']) && !empty($_POST['oldUsername']) && isset($_POST['newUsername']) && !empty($_POST['newUsername'])) {
        $oldUsername = $_POST['oldUsername'];
        $newUsername = $_POST['newUsername'];
        $key = array_search($oldUsername, $_SESSION["userList"]);
        if ($key !== false && !in_array($newUsername, $_SESSION["userList"])) {
            $_SESSION["userList"][$key] = $newUsername;
        }
    }

    if (isset($_POST['deleteUser']) && !empty($_POST['deleteUser'])) {
        $userToDelete = $_POST['deleteUser'];
        $key = array_search($userToDelete, $_SESSION["userList"]);
        if ($key !== false) {
            unset($_SESSION["userList"][$key]);
        }
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD BASICO | Victor dev | PHP ES UNA BASURA MEJOR PRENDE JAVASCRIPT</title>
</head>

<body>


    <div>
        <button type="button" onclick="location.reload();">REFRESH</button>
    </div>

    <section>
        <form action="/" method="post">
            <fieldset>
                <legend>CRUD BASICO</legend>
                <label for="username">USERNAME <input type="text" id="username" name="username" placeholder="Cr0wn777"></label>
                <button type="submit">AGREGAR</button>
            </fieldset>
        </form>
    </section>

    <section>
        <h2>USUARIOS REGISTRADOS</h2>
        <hr>
        <table>
            <?php displayUsers(); ?>
        </table>
        <hr>
        <section>
            <form action="/" method="post">
                <fieldset>
                    <legend>EDITAR USUARIO</legend>
                    <label for="oldUsername">USERNAME <input type="text" id="oldUsername" name="oldUsername" placeholder="Pedro"></label>
                    <label for="newUsername">NUEVO USERNAME <input type="text" id="newUsername" name="newUsername" placeholder="Forex"></label>
                    <button type="submit">EDITAR</button>
                </fieldset>
            </form>
        </section>
        <hr>
        <section>
            <form action="/" method="post">
                <fieldset>
                    <legend>ELIMINAR USUARIO</legend>
                    <label for="deleteUser">USERNAME <input type="text" id="deleteUser" name="deleteUser" placeholder="Yixon"></label>
                    <button type="submit">ELIMINAR</button>
                </fieldset>
            </form>
        </section>
    </section>

    <div>
        <hr>
        <?php print_r($_SESSION["userList"]); ?>
    </div>
</body>

</html>