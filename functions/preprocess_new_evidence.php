<?php 

/******* 
     This script Insert Evidence Record into the database
     
    @author Toluwalope Coast <rodneytoluwalope@gmail.com>
     
*******/

ob_start();

session_start();

require "db.php";

require "functions.php";



insertEvidentRecord();


/******* 
     This function Insert Evidence Record into the database

     
*******/

function insertEvidentRecord()
{

    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        $caseId = clean_int_data($_POST['case_id']);
        $evidenceDescription = clean_text_data($_POST['evidence_description']);
        $evidenceLabelNumber = clean_int_data($_POST['evidence_label_number']);
        $placeFound = clean_text_data($_POST['place_found']);
        $roleInCase = clean_text_data($_POST['role_in_case']);
        $currentLocation = clean_text_data($_POST['current_location']);
        $uploadImage = clean_text_data($_POST['uplaad_image']);
        
        $sql = "INSERT INTO evidence(case_ID, description, evidence_label_no, place_found, role_in_case, current_location, image) VALUES('$caseId', '$evidenceDescription', '$evidenceLabelNumber', '$placeFound', '$roleInCase', '$currentLocation', '$uploadImage')";

        $results = query($sql);
        $results = confirm($results);
        $row = fetch_data($results);
        redirect("http://localhost/criminalrecordmanagementsystem/evidence_records.php");

    
    } else {
        redirect("http://localhost/criminalrecordmanagementsystem/new_evidence.php");
        echo "Something went wrong, Unable to store the evidence record";
    }


} // SERVER METHOD POST

?>