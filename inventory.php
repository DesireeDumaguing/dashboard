<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php include 'libraries.php' ?>
  <link rel="stylesheet" href="style.css">
  <title>Products</title>
</head>

<body>
  <?php include 'sidenavbar.php' ?>

  <section id="content">

    <main>
      <div class="head-title">
        <div class="left">
          <h1>Inventory</h1>
          <ul class="breadcrumb">
            <li>
              <a href="#dashboard">Inventory</a>
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
                <th>ID</th>
                <th>Status</th>
                <th>Created at</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>
                  <p>001</p>
                </td>
                <td>active</td>
                <td>01-01-2023</td>
              </tr>
              <tr>
                <td>
                  <p>002</p>
                </td>
                <td>inactive</td>
                <td>01-01-2023</td>
              </tr>



            </tbody>
          </table>
        </div>
      </div>
    </main>


  </section>
  <script src="script.js"></script>
</body>

</html>