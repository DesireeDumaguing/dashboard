<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <?php include 'libraries.php' ?>

  <title>Online Bakery Inventory System</title>
</head>

<body>
  <?php include 'sidenavbar.php' ?>

  <!-- CONTENT -->
  <section id="content">


    <!-- MAIN -->
    <main>
      <div class="head-title">
        <div class="left">
          <h1>Dashboard</h1>
          <ul class="breadcrumb">
            <li>
              <a href="#dashboard">Dashboard</a>
            </li>
            <li><i class="bx bx-chevron-right"></i></li>
            <li>
              <a class="active" href="#">Home</a>
            </li>
          </ul>
        </div>
      </div>

      <ul class="box-info">
        <li>
          <i class="bx bxs-calendar-check"></i>
          <span class="text">
            <h3>1020</h3>
            <p>New Order</p>
          </span>
        </li>
        <li>
          <i class="bx bxs-group"></i>
          <span class="text">
            <h3>2834</h3>
            <p>Visitors</p>
          </span>
        </li>
        <li>
          <i class="bx bxs-dollar-circle"></i>
          <span class="text">
            <h3>$2543</h3>
            <p>Total Sales</p>
          </span>
        </li>
      </ul>

      <div class="table-data" id="dashboard">
        <div class="order">
          <div class="head">
            <h3>Recent Orders</h3>
            <i class="bx bx-search"></i>
            <i class="bx bx-filter"></i>
          </div>
          <table>
            <thead>
              <tr>
                <th>User</th>
                <th>Date Order</th>
                <th>Status</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>
                  <img src="img/pic.jpg" />
                  <p>John Doe</p>
                </td>
                <td>01-10-2021</td>
                <td><span class="status completed">Completed</span></td>
              </tr>
              <tr>
                <td>
                  <img src="img/pic.jpg" />
                  <p>John Doe</p>
                </td>
                <td>01-10-2021</td>
                <td><span class="status pending">Pending</span></td>
              </tr>
              <tr>
                <td>
                  <img src="img/pic.jpg" />
                  <p>John Doe</p>
                </td>
                <td>01-10-2021</td>
                <td><span class="status process">Process</span></td>
              </tr>
              <tr>
                <td>
                  <img src="img/pic.jpg" />
                  <p>John Doe</p>
                </td>
                <td>01-10-2021</td>
                <td><span class="status pending">Pending</span></td>
              </tr>
              <tr>
                <td>
                  <img src="img/pic.jpg" />
                  <p>John Doe</p>
                </td>
                <td>01-10-2021</td>
                <td><span class="status completed">Completed</span></td>
              </tr>
            </tbody>
          </table>
        </div>

      </div>
      </div>
    </main>
    <!-- MAIN -->
  </section>
  <!-- CONTENT -->





  <script src="script.js"></script>

</body>

</html>