<?php 

/******* 
     This script Insert New Arrest Record into the database
     
    @author Toluwalope Coast <rodneytoluwalope@gmail.com>
     
*******/

ob_start();

session_start();

require "db.php";

require "functions.php";



insertArrestRecord();


/******* 
     This function Insert New Arrest Record into the database

     
*******/

function insertArrestRecord()
{

    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        $criminalID = clean_int_data($_POST['criminal_id']);
        $caseID = clean_int_data($_POST['case_id']);
        $roleInCase = clean_text_data($_POST['role_in_case']);
        $arrestingOfficer = clean_text_data($_POST['arresting_officer']);
        $placeOfArrest = clean_text_data($_POST['place_of_arrest']);
        $arrestingStation = clean_text_data($_POST['arresting_station']);
        $arrestDate = clean_date_data($_POST['arrest_date']);
        $arrestStatus = clean_text_data($_POST['arrest_status']);
        
        $sql = "INSERT INTO arrest(criminal_ID, case_ID, role_in_case, arresting_officer, place_of_arrest, arresting_station, arrest_date, arrest_status) VALUES('$criminalID', '$caseID', '$roleInCase', '$arrestingOfficer', '$placeOfArrest', '$arrestingStation', '$arrestDate', '$arrestStatus')";

        $results = query($sql);
        $results = confirm($results);
        redirect("http://localhost/criminalrecordmanagementsystem/arrests_files.php");

    
    } else {
        redirect("http://localhost/criminalrecordmanagementsystem/new_arrests_files.php");
        echo "Something went wrong, Unable to store the arrest record";
    }


} // SERVER METHOD POST

?>