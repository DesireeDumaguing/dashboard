<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include 'libraries.php' ?>
    <link rel="stylesheet" href="style.css">
    <title>Account</title>
</head>
<body>
    <?php include 'sidenavbar.php' ?>

    <section id="content">
        <main>
            <div class="head-title">
                <div class="left">
                <h1>Account</h1>
                <ul class="breadcrumb">
                    <li>
                    <a href="#dashboard">Profile</a>
                    </li>
                    <li><i class="bx bx-chevron-right"></i></li>
                    <li>
                    <a class="active" href="#">Settings</a>
                    </li>
                </ul>
                </div>
            </div>

            <div class="account">
                <div class="pfp">
                    <img src="img/pic.jpg" style="width: 350px; border-radius: 20px;">
                </div>
                
                <div class="information">
                    <h1>My Profile</h1> <br>
                    <h2>First Name</h2>
                    <input type="text" class="input" value="John">
                    <h2>Last Name</h2>
                    <input type="text" class="input" value="Doe">
                    <h2>Age</h2>
                    <input type="text" class="input" value="20">
                    <h2>Email</h2>
                    <input type="text" class="input" value="johndoe@gmail.com">
                    <h2>Password</h2>
                    <input type="password" class="input" value="johndoe2023">
                    <button class="btn">Update</button>
                </div>
            </div>
        </main>
    </section>


    <script src="script.js"></script>
</body>
</html>