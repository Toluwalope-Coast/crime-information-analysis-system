<?php 

/******* 
     This script insert Criminal Record into the database
     
    @author Toluwalope Coast <rodneytoluwalope@gmail.com>
     
*******/

ob_start();

session_start();

require "db.php";

require "functions.php";



insertCaseRecord();


/******* 
     This function insert Criminal Record into the database

     
*******/

function insertCaseRecord()
{

    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        $caseDescription = clean_text_data($_POST['case_description']);
        $filedDate = clean_date_data($_POST['filed_date']);
        $caseType = clean_text_data($_POST['case_type']);
        $ipo = clean_text_data($_POST['ipo']);
        $filedByWhom = clean_text_data($_POST['filed_by_whom']);
        $stationFiled = clean_text_data($_POST['station_filed']);
        $caseStatus = clean_text_data($_POST['case_status']);
        $resolution = clean_text_data($_POST['resolution']);
        $court = clean_text_data($_POST['court']);
        
        $sql = "INSERT INTO case_file(case_description, date, case_type, ipo, filed_by_whom, case_status, station_filed, resolution, court) VALUES(
            '$caseDescription', '$filedDate', '$caseType', '$ipo', '$filedByWhom',  '$caseStatus', '$stationFiled', '$resolution', '$court')";

        $results = query($sql);
        $results = confirm($results);
        redirect("http://localhost/criminalrecordmanagementsystem/case_files.php");

    
    } else {
        redirect("http://localhost/criminalrecordmanagementsystem/new_case_files.php");
        echo "Something went wrong, Unable to store the case record";
    }


} // SERVER METHOD POST

?>