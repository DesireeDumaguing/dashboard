<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <!-- SIDEBAR -->
  <section id="sidebar">
    <a href="index.php" class="brand">
      <img src="img/logo.png" alt="">
    </a>
    <ul class="side-menu top">
      <li class="active">
        <a href="index.php">
          <i class="bx bxs-dashboard"></i>
          <span class="text">Dashboard</span>
        </a>
      </li>
      <li>
        <a href="inventory.php">
          <i class="bx bxs-layer"></i>
          <span class="text">Inventory</span>
        </a>
      </li>
      <li>
        <a href="products.php">
          <i class="bx bxs-cake"></i>
          <span class="text">Products</span>
        </a>
      </li>
      <li>
        <a href="checkout.php">
          <i class="bx bxs-cart"></i>
          <span class="text">Checkouts</span>
        </a>
      </li>
      <li>
        <a href="order.php">
          <i class="bx bxs-package"></i>
          <span class="text">Orders</span>
        </a>
      </li>
      <li>
    </ul>
    <ul class="side-menu">
      <li>
        <a href="account.php">
          <i class='bx bxs-user'></i>
          <span class="text">Account</span>
        </a>
      </li>
      <li>
        <a href="#" class="logout">
          <i class="bx bxs-log-out-circle"></i>
          <span class="text">Logout</span>
        </a>
      </li>
    </ul>
  </section>
  <!-- SIDEBAR -->

  <section id="content">
    <!-- NAVBAR -->
    <nav>
      <i class="bx bx-menu"></i>

      <form action="#">
        <div class="form-input">
          <input type="search" placeholder="Search..." />
          <button type="submit" class="search-btn">
            <i class="bx bx-search"></i>
          </button>
        </div>
      </form>
      <input type="checkbox" id="switch-mode" hidden />
      <label for="switch-mode" class="switch-mode"></label>
      <a href="#" class="profile">
        <img src="img/pic.jpg" />
      </a>
    </nav>
    <!-- NAVBAR -->
  </section>


</body>

</html>