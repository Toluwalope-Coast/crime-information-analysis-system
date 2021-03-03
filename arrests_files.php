<?php require "includes/header1.php"?>
<title>Arrests</title>
<?php require "includes/header2.php"?>
<?php require "includes/topNav2.php"?>

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
        <a class="active-side-menu text-primary nav-link pl-2 mr-1 pt-3 pb-2" href="arrests_files.php">
            <i class="fas fa-file fa-lg mr-3 ml-4" aria-hidden="true"></i>
            Arrests files
        </a>
    </li>
    
</ul>

    </nav> <!-- side menu closes -->


    <div class="main2 d-flex flex-column">

        <ul class="nav nav-pills sub-menu d-flex flex-row-reverse float-sm-right">
            <li class="nav-item sub-menu-item bg-white sub-menu-item-last">
                <a class="nav-link py-2 px-5 text-dark" href="delete_arrests_files.php">
                    Delete
                </a>
            </li>
            <li class="nav-item sub-menu-item bg-white">
                <a class="nav-link py-2 px-5 text-dark" href="update_arrests_files.php">
                    Update
                </a>
            </li>
            <li class="nav-item sub-menu-item bg-white">
                <a class="nav-link py-2 px-5 text-dark" href="new_arrests_files.php">
                    Insert
                </a>
            </li>
            <li class="nav-item sub-menu-item sub-menu-item-active bg-white">
                <a class="nav-link py-2 px-5 text-dark" href="arrests_files.php">
                    View
                </a>
            </li>
        </ul>

        <h1 class="text-center text-dark main-head">
            Summary Of Arrests
        </h1>

        <input class="form-control mx-4 my-2 mb-5" id="myInput" type="text" placeholder="Filter Search.." />

        <!-- <caption class="text-dark mb-4">Full Lists Of Arrests Files</caption> -->
        <div class="d-flex align-self-stretch table-view">
            <div class="mb-1 mx-3 text-dark table-responsive">

                <table class="table table-hover ml-4">
                    <thead class="text-white">
                        <tr>
                            <th class="column-heading bg-dark" id="th1">Arrest ID</th>
                            <th class="column-heading bg-dark" id="th2">Criminal ID</th>
                            <th class="column-heading bg-dark" id="th3">Case ID</th>
                            <th class="column-heading bg-dark" id="th4">Role In Case</th>
                            <th class="column-heading bg-dark" id="th5">Arresting Officer</th>
                            <th class="column-heading bg-dark" id="th6">Place Of Arrest</th>
                            <th class="column-heading bg-dark" id="th7">Arresting Station</th>
                            <th class="column-heading bg-dark" id="th8">Arrest Date</th>
                            <th class="column-heading bg-dark" id="th9">Arrest Status</th>
                            <th class="column-heading bg-dark" id="th10">Release Date</th>
                            <th class="column-heading bg-dark" id="th11">Mode Of Release</th>
                        </tr>
                    </thead>

                    <tbody class="text-dark" id="myTable">
                        <?php

$sql = "SELECT * FROM arrest";

$results = query($sql);

if (!(row_count($results) > 0)) {

}

while ($row = mysqli_fetch_assoc($results)) {
    echo "<tr>
        <td>{$row["arrest_ID"]}</td>
        <td>{$row["criminal_ID"]}</td>
        <td>{$row["case_ID"]}</td>
        <td>{$row["role_in_case"]}</td>
        <td>{$row["arresting_officer"]}</td>
        <td>{$row["place_of_arrest"]}</td>
        <td>{$row["arresting_station"]}</td>
        <td>{$row["arrest_date"]}</td>
        <td>{$row["arrest_status"]}</td>
        <td>{$row["released_date"]}</td>
        <td>{$row["mode_of_release"]}</td>
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