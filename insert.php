<?php require "includes/header1.php"?>
<title>Insert New Record</title>
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
    <li class="nav-item sub-menu-item sub-menu-item-active bg-white">
        <a class="nav-link py-2 px-5 text-dark" href="insert.php">
            Insert
        </a>
    </li>
    <li class="nav-item sub-menu-item bg-white">
        <a class="nav-link py-2 px-5 text-dark" href="view.php">
            View
        </a>
    </li>
</ul>

        <h1 class="text-center text-dark font-weight-lighter mt-5">
            Enter Criminal Details Below
        </h1>

        <div class="mt-4 mb-2 outer-form mx-auto bg-white px-2">

            <div class="progress-bar-animated_criminal mt-5">
                <div class="step mr-2 mt-2 text-center">
                    <p class="mb-4">Fingerprint left</p>
                    <div class="position-relative">
                        <span
                            class="bullet border border-dark activeBullet rounded-circle px-1 text-light font-weight-bold">1</span>
                        <div class="check fas fa-check ml-1 d-none"></div>
                    </div>
                </div>
                <div class="step mr-2 mt-2 text-center">
                    <p class="mb-4">Fingerprint right</p>
                    <div class="position-relative">
                        <span class="bullet border border-dark rounded-circle px-1 text-light font-weight-bold">2</span>
                        <div class="check fas fa-check ml-1 d-none"></div>
                    </div>
                </div>
                <div class="step mr-2 mt-2 text-center">
                    <p class="mb-4">Basic Info</p>
                    <div class="position-relative">
                        <span class="bullet border border-dark rounded-circle px-1 text-light font-weight-bold">3</span>
                        <div class="check fas fa-check ml-1 d-none"></div>
                    </div>
                </div>
                <div class="step mr-2 mt-2 text-center">
                    <p class="mb-4">Contact Details</p>
                    <div class="position-relative ">
                        <span class="bullet border border-dark rounded-circle px-1 text-light font-weight-bold">4</span>
                        <div class="check fas fa-check ml-1 d-none"></div>
                    </div>
                </div>
                <div class="step mr-2 mt-2 text-center">
                    <p class="mb-4">Other Details</p>
                    <div class="position-relative">
                        <span class="bullet border border-dark rounded-circle px-1 text-light font-weight-bold">5</span>
                        <div class="check fas fa-check ml-1 d-none"></div>
                    </div>
                </div>
            </div>

            <form id="regForm" action="functions/preprocess_insert.php" method="post"
                class="needs-validation form-control border-0 w-100 h-75" validated>

                <div class="page slidepage">
                    <div class="title mt-4 mb-4 font-weight-bold left">Left FingerPrint</div>
                    <div class="field w-100 h-75">
                        <div class="form-group h-75">
                            <p class="mb-4">Place Your left index on the Scanner</p>
                            <img src="images/fingerprint-scanner.gif" alt="Left Fingerprint Image" height="100%"
                                width="75%" />
                        </div>
                    </div>
                    <div class="field button">
                        <span class="bg-primary text-light py-2 px-5 mx-auto next next-1" id="storePrint">Next</span>
                    </div>
                </div>

                <div class="page slidepage">
                    <div class="title mt-4 mb-4 font-weight-bold left">Right FingerPrint</div>
                    <div class="field w-100 h-75">
                        <div class="form-group h-75">
                            <p class="mb-5">Place Your Right index on the Scanner</p>
                            <img src="images/fingerprint-scanner.gif" alt="Right Fingerprint Image" height="100%"
                                width="75%" />
                        </div>
                    </div>
                    <div class="field button">
                        <span
                            class="border-primary border text-primary py-2 px-4 mt-3 mx-auto float-left prev-2 prev">Previous</span>
                        <span class="bg-primary text-light py-2 px-5 mt-3 mx-auto float-right next-2 next"
                            id="printVerifier">
                            Next</span>
                    </div>
                </div>

                <div class="page slidepage">
                    <div class="title mt-4 mb-3 font-weight-bold left">Basic Info</div>
                    <div class="field">
                        <div class="form-group">
                            <label for="firstname" class="label mb-0">First Name</div>
                        <input type="text" id="firstname" required name="firstname" class="form-control mb-2" />

                        <div class="form-group">
                            <label for="laststname" class="label mb-0">Last Name</div>
                        <input type="text" id="lastname" required name="lastname" class="form-control mb-2" />

                        <div class="form-group">
                            <label for="date_of_birth" class="label mb-0">Date of birth</div>
                        <input type="date" id="date_of_birth" required name="date_of_birth" class="form-control mb-2" />

                        <div class="form-group">
                            <label for="gender" class="label mb-0">Gender</div>
                        <select name="gender" required class="custom-select form-control mb-2" id="gender">
                            <option selected>Select Gender</option>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                        </select>
                    </div>
                    <div class="field button">
                        <span
                            class="border-primary border text-primary py-2 mt-4 px-4 float-left prev-3 prev">Previous</span>
                        <span class="bg-primary text-light py-2 px-5 mt-4 float-right next-3 next">
                            Next</span>
                    </div>
                </div>

                <div class="page slidepage">
                    <div class="title mt-4 mb-3 font-weight-bold left">Contact Info</div>
                    <div class="field">

                        <div class="form-group">
                            <label for="home_address" class="label mb-0">Home Address</div>
                        <input type="text" id="home_address" required name="home_address" class="form-control mb-2" />

                        <div class="form-group">
                            <label for="city" class="label mb-0">City</div>
                        <input type="text" id="city" required name="city" class="form-control mb-2" />

                        <div class="form-group">
                            <label for="country" class="label mb-0">Country</div>
                        <input type="text" id="country" required name="country" class="form-control mb-2" />

                        <div class="form-group">
                            <label for="state" class="label mb-0">State</div>
                        <input type="text" id="state" required name="state" class="form-control mb-2" />
                    </div>
                    <div class="field mx-auto">
                        <span
                            class="border-primary border text-primary py-2 mt-3 px-4 mx-auto float-left prev-4 prev">Previous</span>
                        <span class="bg-primary text-light py-2 px-5 mt-3 mx-auto float-right next-4 next">
                            Next</span>
                    </div>
                </div>
                <div class="page slidepage">
                    <div class="title mt-3 mb-4 font-weight-bold left">Other Details</div>
                    <div class="field">

                        <div class="form-group">
                            <label for="tel_no" class="label mb-0">Telephone No.</div>
                        <input type="number" required id="tel_no" name="tel_no" class="form-control mb-2" />

                        <div class="form-group">
                            <label for="employment_status" class="label mb-0">Employment Status</div>
                        <select name="employment_status" required class="custom-select form-control mb-2"
                            id="employment_status">
                            <option selected>Select Employment Status</option>
                            <option value="employed">Employed</option>
                            <option value="unemployed">Unemployed</option>
                            <option value="self_employed">Self_Employed</option>
                        </select>

                        <div class="form-group">
                            <label for="mode_of_identification" class="label mb-0">Mode of Identification</div>
                        <select name="mode_of_identification" required class="custom-select form-control mb-2"
                            id="mode_of_identification">
                            <option selected>Select Identification Type</option>
                            <option value="driver_license">Driver License</option>
                            <option value="International Passport">International Passport</option>
                            <option value="national_identification_card">National Identitficstion Card</option>
                            <option value="Permanent Voters Card">Permanent Voters Card</option>
                        </select>

                        <div class="form-group">
                            <label for="id_no" class="label mb-0">ID. Number</div>
                        <input type="text" id="id_no" required name="id_no" class="form-control mb-2" />

                    </div>
                    <div class="field mx-auto clearfix">
                        <span
                            class="border-primary border text-primary py-2 px-4 mt-3 float-left prev-5 prev">Previous</span>
                        <button class="btn btn-primary mt-3 px-5 py-2 float-right submit">Done</button>
                    </div>
                </div>
        </div>


        </form>
    </div> <!-- closes outer form -->
</div> <!-- THE MAIN CONTENT -->
</div> <!-- closes top row -->

<?php require "includes/footer.php"?>