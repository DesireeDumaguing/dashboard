<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php include 'libraries.php' ?>
  <link rel="stylesheet" href="style.css">
  <title>Document</title>
</head>

<body>
  <?php include 'sidenavbar.php' ?>

  <section id="content">

    <main>
      <div class="head-title">
        <div class="left">
          <h1>Products</h1>
          <ul class="breadcrumb">
            <li>
              <a href="#dashboard">Products</a>
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
                <th>Name</th>
                <th>Price</th>
                <th>Stocks</th>
                <th>Variants</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>
                  <p>001</p>
                </td>
                <td>Red Velvet Cheesecake</td>
                <td>900</td>
                <td>
                  <div contenteditable>10</div>
                </td>
                <td>10x12</td>
              </tr>
              <tr>
                <td>
                  <p>002</p>
                </td>
                <td>Carrot Cake</td>
                <td>900</td>
                <td>
                  <div contenteditable>10</div>
                </td>
                <td>10x12</td>
              </tr>
              <tr>
                <td>
                  <p>003</p>
                </td>
                <td>Ube Cake</td>
                <td>900</td>
                <td>
                  <div contenteditable>10</div>
                </td>
                <td>10x12</td>
              </tr>
              <tr>
                <td>
                  <p>004</p>
                </td>
                <td>Tiramisu</td>
                <td>900</td>
                <td>
                  <div contenteditable>10</div>
                </td>
                <td>10x12</td>
              </tr>
              <tr>
                <td>
                  <p>005</p>
                </td>
                <td>Chocofudge Cake</td>
                <td>900</td>
                <td>
                  <div contenteditable>10</div>
                </td>
                <td>10x12</td>
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