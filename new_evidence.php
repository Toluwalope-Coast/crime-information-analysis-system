<?php require "includes/header1.php"?>
<title>New Evidence</title>
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
                <a class="active-side-menu text-primary nav-link pl-2 mr-1 pt-3 pb-2" href="evidence_records.php">
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


    <div class="main3 d-flex flex-column">

        <ul class="nav nav-pills sub-menu d-flex flex-row-reverse float-sm-right">
            <li class="nav-item sub-menu-item bg-white sub-menu-item-last">
                <a class="nav-link py-2 px-5 text-dark" href="delete_evidence.php">
                    Delete
                </a>
            </li>
            <li class="nav-item sub-menu-item bg-white">
                <a class="nav-link py-2 px-5 text-dark" href="update_evidence.php">
                    Update
                </a>
            </li>
            <li class="nav-item sub-menu-item sub-menu-item-active bg-white">
                <a class="nav-link py-2 px-5 text-dark" href="new_evidence.php">
                    Insert
                </a>
            </li>
            <li class="nav-item sub-menu-item bg-white">
                <a class="nav-link py-2 px-5 text-dark" href="evidence_records.php">
                    View
                </a>
            </li>
        </ul>


        <h1 class="text-center text-dark main-head">
            Insert New Evidence
        </h1>
        <!-- <header class="text-center text-dark h5 pt-2 pb-3 font-weight-bold">Enter Criminal Details Below</header> -->

        <form id="regForm" action="functions/preprocess_new_evidence.php" method="post"
            class="needs-validation d-flex flex-column form-control mx-auto border-0 w-50 mb-3 rounded-lg h-100 px-3 pt-5"
            validated>

            <div class="field">
                <div class="form-group">
                    <label for="case_id" class="label mb-0">Case ID</div>

                <select name="case_id" id="case_id" class="form-control mb-2" required>
                    <option value="">Select the Case ID</option>
                    <?php

$sql = "SELECT case_id FROM case_file";

$results = query($sql);

if (!(row_count($results) > 0)) {

}
?>
                    <?php
while ($row = mysqli_fetch_assoc($results)) {
    echo '<option value="' . $row['case_id'] . '">' . $row['case_id'] . ' </option>';
}
?>
                </select>

                <div class="form-group">
                    <label for="evidence_description" class="label mb-0">Evidence Description</div>
                <input type="text" required id="evidence_description" name="evidence_description"
                    class="form-control mb-2" />

                <div class="form-group">
                    <label for="evidence_label_number" class="label mb-0">Evidence Label Number</div>
                <input type="number" required id="evidence_label_number" name="evidence_label_number"
                    class="form-control mb-2" />

                <div class="form-group">
                    <label for="place_found" class="label mb-0">Place found</div>
                <input type="text" id="place_found" required name="place_found" class="form-control mb-2" />

                <div class="form-group">
                    <label for="role_in_case" class="label mb-0">Evidence Role In Case</div>
                <input type="text" id="role_in_case" required name="role_in_case" class="form-control mb-2" />

                <div class="form-group">
                    <label for="current_location" class="label mb-0">Evidence Current Status</div>
                <select name="current_location" class="custom-select form-control mb-2" id="current_location">
                    <option selected>Select the Evidence Current Location</option>
                    <option value="In Custody">In Custody</option>
                    <option value="lost">Lost</option>
                    <option value="transferred">Transferred</option>
                    <option value="on the loose">On the loose</option>
                </select>

                <div class="custom-file mt-4">
                    <input type="file" class="custom-file-input" id="evidence_image">
                    <label class="custom-file-label" for="evidence_image">Upload Evidence</label>
                </div>

                <button type="submit"
                    class="btn btn-primary d-flex justify-content-center mx-auto text-light small py-2 px-4 mt-4 mb-2">Submit</button>
            </div>


    </div> <!-- THE MAIN CONTENT -->
</div>

<?php require "includes/footer.php"?>