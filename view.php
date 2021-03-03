<?php include "includes/header1.php"?>
<title>View Records</title>
<?php include "includes/header2.php"?>
<?php include "includes/topNav.php"?>

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
                        redirect("http://localhost/criminalrecordmanagementsystem/login.php");
                    }
                ?>
            </div>
        </div>

        <ul class="navbar-nav menu-links w-100 bg-white mb-2">

        <li class="nav-item top-side-menu-items pt-1 mt=2">
                <a class="text-dark nav-link pl-2 mr-1 pt-3 pb-2" href="dashboard.php">
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
                <a class="active-side-menu text-primary nav-link pl-2 mr-1 pt-3 pb-2" href="view.php">
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


    <div class="main d-flex flex-column">

<ul class="nav nav-pills sub-menu d-flex flex-row-reverse float-sm-right">
    
    <li class="nav-item sub-menu-item bg-white">
        <a class="nav-link py-2 px-5 text-dark" href="update.php">
            Update
        </a>
    </li>
    <li class="nav-item sub-menu-item bg-white">
        <a class="nav-link py-2 px-5 text-dark" href="insert.php">
            Insert
        </a>
    </li>
    <li class="nav-item sub-menu-item sub-menu-item-active bg-white">
        <a class="nav-link py-2 px-5 text-dark" href="view.php">
            View
        </a>
    </li>
</ul>


        <h1 class="text-center text-dark mt-5 mb-5 view_head">
            View the Complete Criminal Records
        </h1>

        <input class="form-control mx-4 my-2 mb-5" id="myInput" type="text" placeholder="Filter Search.." />
        <div class="d-flex align-self-stretch table-view">
            <div class="mb-1 mx-3 text-dark table-responsive">

                <table class="table table-hover ml-4" id="crm">
                    <thead class="text-white">
                        <tr>
                            <th class="column-heading bg-dark" id="th1">Criminal ID</th>
                            <th class="column-heading bg-dark" id="th2">Firstname</th>
                            <th class="column-heading bg-dark" id="th3">Lastname</th>
                            <th class="column-heading bg-dark" id="th4">Date Of Birth</th>
                            <th class="column-heading bg-dark" id="th5">Gender</th>
                            <th class="column-heading bg-dark" id="th6">Home Address</th>
                            <th class="column-heading bg-dark" id="th7">City</th>
                            <th class="column-heading bg-dark" id="th7">State</th>
                            <th class="column-heading bg-dark" id="th8">Country</th>
                            <th class="column-heading bg-dark" id="th9">Employment Status</th>
                            <th class="column-heading bg-dark" id="th10">Date Recorded</th>
                            <th class="column-heading bg-dark" id="th11">Mode Of Identification</th>
                            <th class="column-heading bg-dark" id="th12">ID No</th>
                            <th class="column-heading bg-dark" id="th13">fp_Template1</th>
                            <th class="column-heading bg-dark" id="th14">fp_Template1</th>
                        </tr>
                    </thead>

                    <tbody class="text-dark" id="myTable">
                        <?php

$sql = "SELECT * FROM criminal";

$results = query($sql);

if (!(row_count($results) > 0)) {

}

while ($row = mysqli_fetch_assoc($results)) {
    echo "<tr>
        <td>{$row["criminal_ID"]}</td>
        <td>{$row["firstname"]}</td>
        <td>{$row["lastname"]}</td>
        <td>{$row["date_of_birth"]}</td>
        <td>{$row["gender"]}</td>
        <td>{$row["home_address"]}</td>
        <td>{$row["city"]}</td>
        <td>{$row["state_of_residence"]}</td>
        <td>{$row["country"]}</td>
        <td>{$row["employment_status"]}</td>
        <td>{$row["date"]}</td>
        <td>{$row["mode_of_identification"]}</td>
        <td>{$row["id_no"]}</td>
        <td>{$row["fpTemplate1"]}</td>
        <td>{$row["fpTemplate2"]}</td>
    </tr>";
}
?>
                    </tbody>

                </table>
            </div>
        </div>

    </div> <!-- THE MAIN CONTENT -->
</div>
<?php require "includes/footer.php"?>