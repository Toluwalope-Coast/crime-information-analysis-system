<?php 

/******* 
     This script Update Evidence Record in the database
     
    @author Toluwalope Coast <rodneytoluwalope@gmail.com>
     
*******/

ob_start();

session_start();

require "db.php";

require "functions.php";



updateEvidenceRecord();


/******* 
     This function Update Evidence Record in the database

     
*******/

function updateEvidenceRecord()
{

    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        $evidenceColumn = clean_text_data($_POST['updateColumn']);
        $valueUpdate = clean_date_data($_POST['valueUpdate']);
        $evidenceId = clean_int_data($_POST['evidence_ID']);
    
        $sql = "UPDATE evidence SET $evidenceColumn = '$valueUpdate' WHERE evidence_ID  = $evidenceId";
        $results = query($sql);
        $results = confirm($results);
        redirect("http://localhost/criminalrecordmanagementsystem/evidence_records.php");

    
    } else {
        redirect("http://localhost/criminalrecordmanagementsystem/update_evidence.php");
        echo "Something went wrong, Unable to update the evidence record";
    }


} // SERVER METHOD POST

?>