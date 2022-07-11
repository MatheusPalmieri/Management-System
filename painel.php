<?php 
    include('protect.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel</title>
    <style>
        body {
            /* width: 100%; */
        }

        .users {
            position: absolute;
            left: 30px;
            bottom: 60px;
        }

        .logout {
            position: absolute;
            left: 30px;
            bottom: 20px;
        }
    </style>
</head>
<body>
    <h2>Bem vindo ao Painel. 
        <?php //echo $_SESSION['name']; ?>
    </h2>

    <section>
        <article>
            <button>+</button>
        </article>
    </section>

    <div class="users">
        <a href="user.php">Users</a>
    </div>

    <div class="logout">
        <a href="logout.php">Logout</a>
    </div>
</body>
</html>