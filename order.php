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
          <h1>Order</h1>
          <ul class="breadcrumb">
            <li>
              <a href="#dashboard">Order</a>
            </li>
            <li><i class="bx bx-chevron-right"></i></li>
            <li>
              <a class="active" href="#">Home</a>
            </li>
          </ul>
        </div>
      </div>


      <div class="table-data" id="dashboard">
        <div class="order">

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
                  <p>John Doe</p>
                </td>
                <td>01-10-2021</td>
                <td><span class="status completed">Completed</span></td>
              </tr>
              <tr>
                <td>
                  <p>John Doe</p>
                </td>
                <td>01-10-2021</td>
                <td><span class="status pending">Pending</span></td>
              </tr>
              <tr>
                <td>
                  <p>John Doe</p>
                </td>
                <td>01-10-2021</td>
                <td><span class="status process">Process</span></td>
              </tr>
              <tr>
                <td>
                  <p>John Doe</p>
                </td>
                <td>01-10-2021</td>
                <td><span class="status pending">Pending</span></td>
              </tr>
              <tr>
                <td>
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