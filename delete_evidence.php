<?php require "includes/header1.php"?>
<title>Delete An Evidence</title>
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


    <div class="main2 d-flex flex-column">

        <ul class="nav nav-pills sub-menu d-flex flex-row-reverse float-sm-right">
            <li class="nav-item sub-menu-item bg-white sub-menu-item-active sub-menu-item-last">
                <a class="nav-link py-2 px-5 text-dark" href="delete_evidence.php">
                    Delete
                </a>
            </li>
            <li class="nav-item sub-menu-item bg-white">
                <a class="nav-link py-2 px-5 text-dark" href="update_evidence.php">
                    Update
                </a>
            </li>
            <li class="nav-item sub-menu-item bg-white">
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
            Delete an Evidence
        </h1>
        <div class="h-100 outer-form2 mx-auto p-5">

            <!-- <header class="text-center text-dark h5 pt-2 pb-3 font-weight-bold">Enter Criminal Details Below</header> -->


            <form id="regForm" action="functions/preprocess_delete_evidence_file.php" method="post"
                class="needs-validation form-control border-0 p-4 w-100 h-100" validated>

                <div class="page slidepage mt-2 w-100">
                    <div class="field">
                        <div class="form-group mx-auto">
                            <label for="evidence_ID" class="label label2 mb-4 mt-4">
                                Where Evidence Id is:</label>
                            <input type="text" id="evidence_ID" name="evidence_ID"
                                class="form-control py-4 pl-4 neo-pressed mb-2"
                                placeholder="Enter the Evidence Id for the row to delete here" required />
                            <div class="valid-feedback">Valid.</div>
                            <div class="invalid-feedback">
                                Please fill out this field.</div>
                        </div>
                        <button class="btn neo-convex mt-5 w-100 float-right submit">
                            Delete</button>

                    </div> <!-- THE FIELD -->


                </div> <!-- THE SLIDEPAGE -->

            </form>

        </div> <!-- THE OUTER FORM -->


    </div> <!-- THE MAIN CONTENT -->
</div> <!-- ROW -->

<?php require "includes/footer.php"?>