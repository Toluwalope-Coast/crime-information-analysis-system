<?php 

/******* 
     This script Delete Evidence Record from the database
     
    @author Toluwalope Coast <rodneytoluwalope@gmail.com>
     
*******/

ob_start();

session_start();

require "db.php";

require "functions.php";



deleteEvidenceRecord();


/******* 
     This function Delete Evidence Record from the database

     
*******/

function deleteEvidenceRecord()
{

    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        
        $id = clean_int_data($_POST['evidence_ID']);

        $sql = "DELETE FROM evidence WHERE evidence_ID = $id";

        $results = query($sql);
        confirm($results);
        redirect("http://localhost/criminalrecordmanagementsystem/evidence_records.php");

    
    } else {
        redirect("http://localhost/criminalrecordmanagementsystem/delete_evidence.php");
        echo "Something went wrong, Unable to delete the evidence record";
    }


} // SERVER METHOD POST

?>