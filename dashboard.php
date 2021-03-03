<?php require "includes/header1.php"?>
<title>Dashboard</title>
<?php require "includes/header2.php"?>
<?php require "includes/topNav.php"?>

<div class="d-flex flex-row lower_top-row">
</div>

<div class="d-flex flex-row top-row">
    <nav class="d-flex justify-content-start navbar py-0 px-0 bg-white w-25 shadow j" id="side-menu">
        <!-- side menu -->

        <div class="navbar-nav user-img w-100 pb-3 bg-grey">

            <img src="images/profile_pic.png" class="rounded-circle mt-3 mb-1 mx-auto border" alt="user_image"
                height="130px" width="130px">

            <div class="user mt-3 mb-2 text-center text-dark font-weight">
                <?php
                    if (isset($_SESSION['lastname']) && isset($_SESSION['rank'])) {
                        echo ucfirst($_SESSION['rank']) . " " . ucfirst($_SESSION['lastname']); //. ucfirst($_SESSION['username']);
                    } else{
                        echo ucfirst($_SESSION['rank']) . " " . ucfirst($_SESSION['lastname']); 
                        redirect("http://localhost/criminalrecordmanagementsystem/login.php");
                    }
                ?>
            </div>
        </div>

        <ul class="navbar-nav menu-links w-100 bg-white mb-2">

            <li class="nav-item top-side-menu-items pt-1 mt=2">
                <a class="active-side-menu text-primary nav-link pl-2 mr-1 pt-3 pb-2" href="dashboard.php">
                    <i class="fas fa-home fa-lg mr-3 ml-4" aria-hidden="true"></i>
                    Home
                </a>
            </li>
            <li class="nav-item side-menu-items pt-1">
                <a class="text-dark nav-link pl-2 mr-1 pt-3 pb-2" href="analytics.php">
                    <i class="fas fa-book-open fa-lg mr-3 ml-4" aria-hidden="true"></i>
                    Analytics
                </a>
            </li>
            <li class="nav-item side-menu-items pt-1">
                <a class="text-dark nav-link pl-2 mr-1 pt-3 pb-2" href="view.php">
                    <i class="fas fa-book-open fa-lg mr-3 ml-4" aria-hidden="true"></i>
                    Criminals
                </a>
            </li>
            <li class="nav-item side-menu-items pt-1">
                <a class="text-dark nav-link pl-2 mr-1 pt-3 pb-2" href="case_files.php">
                    <i class="fas fa-file fa-lg mr-3 ml-4" aria-hidden="true"></i>
                    Crime Case files
                </a>
            </li>
            <li class="nav-item side-menu-items pt-1">
                <a class="text-dark nav-link pl-2 mr-1 pt-3 pb-2" href="evidence_records.php">
                    <i class="fas fa-file fa-lg mr-3 ml-4" aria-hidden="true"></i>
                    Evidence Records
                </a>
            </li>
            <li class="nav-item side-menu-items pt-1">
                <a class="text-dark nav-link pl-2 mr-1 pt-3 pb-2" href="arrests_files.php">
                    <i class="fas fa-file fa-lg mr-3 ml-4" aria-hidden="true"></i>
                    Arrests files
                </a>
            </li>
            
        </ul>

    </nav> <!-- side menu closes -->

    <div class="main d-flex flex-column pt-5">


        <h1 class="text-center text-dark">
            Dashboard
        </h1>

        <div class="d-inline-flex h-50 w-100 pt-2 card-container">
            <div class="card d-flex flex-column justify-content-around w-100 mx-5 my-5 p-0" id="view_record">
                <img class="card-img-top p-0 card-img-overlay img-fluid" src="./images/dashboard_view.svg"
                    alt="View Criminal Record image" />
                <a href="view.php" class="btn stretched-link card-title text-dark">
                    View all Criminal Records </a>
            </div>
            <div class="card d-flex flex-column justify-content-around w-100 mx-5 my-5 p-0 flex-column"
                id="insert_record">
                <img class="card-img-top p-0 card-img-overlay img-fluid" src="./images/dashboard_user_insert.svg"
                    alt="Insert Criminal Record image" />
                <a href="insert.php" class="btn stretched-link card-title text-dark">
                    Insert New Criminal Record </a>

            </div>
        </div>

        <div class="d-inline-flex mt-5 ml-5">
            <span class="col-sm text-dark mt-5 ml-5 dash-text"></span>

            <span class="col-sm text-dark mt-5 ml-5 dash-text"></span>
        </div>

    </div> <!-- THE MAIN CONTENT -->
</div>
<?php require "includes/footer.php"?>