<div class="row">
    <!-- Top nav row  -->



    <nav
        class="navbar navbar-expand-sm navbar-dark d-flex justify-content-between fixed-top top-nav-2 mr-0 pr-2 ml-0 pl-2 my-0 py-0">

        <!-- Brand -->
        <div class="navbar-brand text-left">
            <a class="mr-2" href="http://localhost/criminalrecordmanagementsystem/dashboard.php">
                <img class="rounded-circle" src="images/police.png" alt="Logo" width="40px" />
            </a>

            <a class="text-dark text-left mr-5 text-decoration-none font-weight-bolder"
                href="http://localhost/criminalrecordmanagementsystem/dashboard.php">Nigeria Police Force</a>
        </div>

        <a class="text-dark project-title text-left mr-5 navbar-brand text-decoration-none"
            href="http://localhost/criminalrecordmanagementsystem/dashboard.php">Crime Tracking System</a>

        <!-- Toggler/collapsibe Button -->
        <button class="navbar-toggler col-xl" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon bg-primary"></span>
        </button>

        <span class="nav-text text-right">
            <i class="fas fa-clock fa-lg mr-2 text-dark" aria-hidden="true"></i><span id="todaysDate"
                class="mr-4 text-dark"></span>
        </span>

        <!-- <div class="navbar-text col-sm-2"><?php
// if (isset($_SESSION['lastname']) && isset($_SESSION['rank'])) {
//   echo"Welcome: " //. ucfirst($_SESSION['username']);
// } else{
//   redirect("http://localhost/criminalrecordmanagementsystem/login.php");
// }
?>
          </div> -->
        <span class="text-right nav-text">
            <i class="fas fa-sign-out-alt fa-lg mr-2 logout text-dark" aria-hidden="true"></i>
            <a href="logout.php" class="text-decoration-none logout text-dark">Logout</a>
        </span>

    </nav>
</div> <!-- Top nav row closes -->


<div class="row">
    <!--Content Area -->