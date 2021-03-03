<?php 

/******* 
     This script Update Case Record in the database
     
    @author Toluwalope Coast <rodneytoluwalope@gmail.com>
     
*******/

ob_start();

session_start();

require "db.php";

require "functions.php";



updateCaseRecord();


/******* 
     This function Update Case Record in the database

     
*******/

function updateCaseRecord()
{

    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        $caseColumn = clean_text_data($_POST['updateColumn']);
        $valueUpdate = clean_date_data($_POST['valueUpdate']);
        $caseId = clean_int_data($_POST['case_id']);
    
        $sql = "UPDATE case_file SET $caseColumn = '$valueUpdate' WHERE case_ID  = $caseId";
        $results = query($sql);
        $results = confirm($results);
        redirect("http://localhost/criminalrecordmanagementsystem/case_files.php");

    
    } else {
        redirect("http://localhost/criminalrecordmanagementsystem/update_case_files.php");
        echo "Something went wrong, Unable to update the case record";
    }


} // SERVER METHOD POST

?>