<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- STYLE -->
  <link rel="stylesheet" href="css/navigation.css">
  
  <!-- Icons -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>

</head>
<body>

  <div class="navigation">
    <div class="menu-toggle"></div>
      <ul class="list">

        <!-- Home -->

        <li class="list-item" style="--color:#f44336">
          <a href="dashboard.php">
            <span class="icon">
              <ion-icon name="stats-chart-outline"></ion-icon>
            </span>
            <span class="text">Dashboard</span>
          </a>
        </li>

        <!-- Functionary -->

        <li class="list-item" style="--color:#ffa117">
          <a href="functionary.php">
            <span class="icon">
              <ion-icon name="people-outline"></ion-icon>
              <!-- <ion-icon name="person-add-outline"></ion-icon> -->
            </span>
            <span class="text">Functionary</span>
          </a>
        </li>

        <!-- User -->

        <li class="list-item" style="--color:#ffa117">
          <a href="user.php">
            <span class="icon">
              <ion-icon name="person-outline"></ion-icon>
            </span>
            <span class="text">User</span>
          </a>
        </li>

        <!-- Logout -->

        <li class="list-item" style="--color:#b145e9">
          <a href="logout.php">
            <span class="icon">
              <ion-icon name="log-out-outline"></ion-icon>
            </span>
            <span class="text">Logout</span>
          </a>
        </li>

      </ul>
  </div>

  <!-- SCRIPTS -->

  <!-- Navigation -->
  <script src="javascript/navigation.js"></script>

</body>
</html>