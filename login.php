<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Favicon -->
    <link rel="shortcut icon" href="images/police.png" type="image/x-icon">
    <link rel="icon" href="images/police.png" type="image/x-icon">
    <title> Login Page </title>

    <!-- main stylesheet -->
    <link rel="stylesheet" href="css/style.css">


    <!-- Font Awesome -->
    <link rel="stylesheet" href="css/all.min.css">


</head>

<body>


    <main>

        <h2 class="header-text">The Nigerian Police force</h2>

        <div class="container">
            <!-- Logo -->
            <div class="main-image">
                <img src="images/Nigerian_Police_Logo.png" alt="Nigerian_Police_Logo">
            </div>

            <h1 class="main-header">Crime Information Tracking System </h1>


            <!-- User Login -->
            <form action="functions/loginProcessor.php" id="form" class="form" method="post">

                <!-- Username -->
                <div class="form-group">
                    <span class="fa fa-user form-icon"></span>
                    <input type="text" name="uname" id="name" class="form-control" placeholder="Username" required />

                </div>

                <!-- Password -->
                <div class="form-group">
                    <span class="fa fa-lock form-icon"></span>
                    <input type="password" name="pswd" id="password" class="form-control" placeholder="Password"
                        required />

                </div>

                <!-- submit -->
                <div class="form-group">
                    <button type="submit" id="submit" class="submit-button">
                        Login
                    </button>
                </div>
            </form>



            <!-- External Link -->
            <div class="main-footer-text">
                <a href="#" onclick="forgot()">
                    <h4>Forgot password / Username</h4>
                </a>
            </div>

            <div>


            </div>

        </div>
    </main>
</body>

</html>