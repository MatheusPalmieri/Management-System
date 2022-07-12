<?php 
    include('protect.php');
?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Title Page -->
    <title>Painel</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/programmer.png" type="image/x-icon">

    <!-- STYLE -->
    <link rel="stylesheet" href="css/menu.css">
    
    <!-- Icons -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>

  </head>
  <body>
  <!-- <div class="container"> -->
    <div class="navigation">
      <div class="menu-toggle"></div>
      <ul class="list">

        <!-- Home -->

        <li class="list-item active" style="--color:#f44336">
          <a>
            <span class="icon">
              <ion-icon name="home-outline"></ion-icon>
            </span>
            <span class="text">início</span>
          </a>
        </li>

        <!-- Functionary -->

        <li class="list-item" style="--color:#ffa117">
          <a>
            <span class="icon">
              <ion-icon name="person-add-outline"></ion-icon>
            </span>
            <span class="text">Funcionários</span>
          </a>
        </li>

        <!-- Desktops -->

        <li class="list-item" style="--color:#0fc70f">
          <a>
            <span class="icon">
              <ion-icon name="desktop-outline"></ion-icon>
            </span>
            <span class="text">Desktops</span>
          </a>
        </li>

        <!-- Users -->

        <li class="list-item" style="--color:#b145e9">
          <a>
            <span class="icon">
              <ion-icon name="person-outline"></ion-icon>
            </span>
            <span class="text">Usuários</span>
          </a>
        </li>

        <!-- Settings -->

        <li class="list-item" style="--color:#b145e9">
          <a>
            <span class="icon">
              <ion-icon name="settings-outline"></ion-icon>
            </span>
            <span class="text">Configurações</span>
          </a>
        </li>

        <!-- Logout -->

        <li class="list-item" style="--color:#b145e9">
          <a href="logout.php">
            <span class="icon">
              <ion-icon name="log-out-outline"></ion-icon>
            </span>
            <span class="text">Sair</span>
          </a>
        </li>

      </ul>
    </div>
  <!-- </div> -->

  <!-- SCRIPTS -->

  <!-- Redirect Pages -->
  <script src="javascript/redirect.js"></script>

  <!-- Menu -->
  <script src="javascript/menu.js"></script>


  </body>
</html>