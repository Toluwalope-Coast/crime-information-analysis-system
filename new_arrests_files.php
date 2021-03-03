<?php require "includes/header1.php"?>
<title>New Case</title>
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


    <div class="main d-flex flex-column">

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
            <li class="nav-item sub-menu-item sub-menu-item-active bg-white">
                <a class="nav-link py-2 px-5 text-dark" href="new_arrests_files.php">
                    Insert
                </a>
            </li>
            <li class="nav-item sub-menu-item bg-white">
                <a class="nav-link py-2 px-5 text-dark" href="arrests_files.php">
                    View
                </a>
            </li>
        </ul>


        <h1 class="text-center text-dark main-head">
            Insert New Arrest
        </h1>
        <div class="h-100 my-4 mb-3 outer-form mx-auto bg-white p-2">

            <!-- <header class="text-center text-dark h5 pt-2 pb-3 font-weight-bold">Enter Criminal Details Below</header> -->

            <div class="progress-bar-animated mt-5">
                <div class="step mr-4 mt-2 text-center w-100">
                    <p class="mb-4">Arrest Trace</p>
                    <div class="position-relative">
                        <span
                            class="bullet border border-dark activeBullet rounded-circle px-1 text-light font-weight-bold">1</span>
                        <div class="check fas fa-check ml-1 d-none"></div>
                    </div>
                </div>
                <div class="step mr-4 mt-2 text-center w-100">
                    <p class="mb-4">Arrester Info</p>
                    <div class="position-relative ">
                        <span class="bullet border border-dark rounded-circle px-1 text-light font-weight-bold">2</span>
                        <div class="check fas fa-check ml-1 d-none"></div>
                    </div>
                </div>
                <div class="step mr-3 mt-2 text-center w-100">
                    <p class="mb-4">Arrest Status</p>
                    <div class="position-relative">
                        <span class="bullet border border-dark rounded-circle px-1 text-light font-weight-bold">3</span>
                    </div>
                </div>
            </div>
            <form id="regForm" action="functions/preprocess_new_arrest.php" method="post"
                class="needs-validation form-control border-0 w-100 h-75" validated>

                <div class="page slidepage">
                    <div class="title mt-3 mb-3 font-weight-bold left">Arrest Trace</div>
                    <div class="field">
                        <div class="form-group">
                            <label for="criminal_id" class="label mb-0">Criminal ID</div>
                        <select name="criminal_id" id="criminal_id" class="form-control mb-2" required>
                            <option value="">Select the Criminal ID</option>
                            <?php

                                    $sql = "SELECT criminal_id, firstname, lastname FROM criminal";
                                    $results = query($sql);
                                        if (row_count($results) > 0) {
                                            while ($row = mysqli_fetch_assoc($results)) {
                                                echo '<option value="' . $row['criminal_id'] . '">' . $row['criminal_id'] . ' - ' . $row['firstname'] . ' ' . $row['lastname'] . ' </option>';
                                            }
                                        }
                                ?>
                        </select>

                        <div class="form-group">
                            <label for="case_id" class="label mb-0">Case ID</div>
                        <select name="case_id" id="case_id" class="form-control mb-2" required>
                            <option value="">Select the Case ID</option>
                            <?php

                                    $sql = "SELECT case_id, case_description FROM case_file";
                                    $results = query($sql);
                                        if (row_count($results) > 0) {
                                            while ($row = mysqli_fetch_assoc($results)) {
                                                echo '<option value="' . $row['case_id'] . '">' . $row['case_id'] . " - " . $row['case_description'] . ' </option>';
                                            }
                                        }
                                ?>
                        </select>

                        <div class="form-group">
                            <label for="role_in_case" class="label mb-0">Role In Case</div>
                        <input type="text" id="role_in_case" required name="role_in_case" class="form-control mb-2" />
                    </div>
                    <div class="field button">
                        <span
                            class="bg-primary text-light py-2 mt-5 px-5 mb-5 mx-auto float-right next-1 next">Next</span>
                    </div>
                </div>
                <!--closes slidepage 1-->

                <div class="page slidepage">
                    <div class="title mt-3 mb-3 font-weight-bold left">Arrester Info</div>
                    <div class="field">

                        <div class="form-group">
                            <label for="arresting_officer" class="label mb-0">Arresting Officer</div>
                        <input type="text" id="arresting_officer" required name="arresting_officer"
                            class="form-control mb-2" />

                        <div class="form-group">
                            <label for="place_of_arrest" class="label mb-0">Place of Arrest</div>
                        <input type="text" id="place_of_arrest" required name="place_of_arrest"
                            class="form-control mb-2" />

                        <div class="form-group">
                            <label for="arresting_station" class="label mb-0">Arresting Station</div>
                        <input type="text" id="arresting_station" required name="arresting_station"
                            class="form-control mb-2" />

                        <div class="form-group">
                            <label for="arrest_date" class="label mb-0">Arrest Date</div>
                        <input type="date" id="arrest_date" required name="arrest_date" class="form-control mb-2" />
                    </div><!-- closes field -->
                    <div class="field mx-auto">
                        <span
                            class="border-primary border text-primary py-2 px-4 mt-3 mb-2 mx-auto float-left prev-2 prev">Previous</span>
                        <span class="bg-primary text-light py-2 px-5 mt-3 mb-2 mx-auto float-right next-2 next">
                            Next</span>
                    </div><!-- closes field-->
                </div> <!-- closes slidepage 2 -->
                <div class="page slidepage">
                    <div class="title mt-4 mb-3 font-weight-bold left">Arrest Status</div>
                    <div class="field">

                        <div class="form-group">
                            <label for="arrest_status" class="label mb-0">Arrest Status</div>
                        <select name="arrest_status" required class="custom-select form-control mb-2"
                            id="arrest_status">
                            <option selected>Select the Current Arrest Status</option>
                            <option value="In Custody">In Custody</option>
                            <option value="Freed">Freed</option>
                            <option value="Transferred">Transferred</option>
                            <option value="Dead">Dead</option>
                            <option value="Escaped">Escaped</option>
                            <option value="Hospitalized">Hospitalized</option>
                        </select>

                    </div> <!-- closes field -->
                    <div class="field mx-auto clearfix">
                        <span
                            class="border-primary border text-primary py-2 px-4 mt-5 float-left prev-3 prev">Previous</span>
                        <button class="btn btn-primary mt-5 px-5 py-2 float-right submit">Done</button>
                    </div>
                </div> <!-- close slidepage 3 -->
            </form>
        </div> <!-- closes outer form -->
    </div> <!-- THE MAIN CONTENT -->
</div> <!-- closes top row -->

<?php require "includes/footer.php"?>