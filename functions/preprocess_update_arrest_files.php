<?php 

/******* 
     This script Update Arrest Record in the database
     
    @author Toluwalope Coast <rodneytoluwalope@gmail.com>
     
*******/

ob_start();

session_start();

require "db.php";

require "functions.php";



updateArrestRecord();


/******* 
     This function Update Arrest Record in the database

     
*******/

function updateArrestRecord()
{

    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        $arrestColumn = clean_text_data($_POST['updateColumn']);
        $valueUpdate = clean_date_data($_POST['valueUpdate']);
        $arrestId = clean_int_data($_POST['arrest_ID']);
        $arrestDate = date("Y-m-d");

        if($arrestColumn == "mode_of_release") {
            $sql = "UPDATE arrest SET $arrestColumn = '$valueUpdate' WHERE arrest_ID  = $arrestId";
            $results = query($sql);
            $results = confirm($results);
            
            $sql = "UPDATE arrest SET released_date = '$arrestDate' WHERE arrest_ID  = $arrestId";
            $results = query($sql);
            $results = confirm($results);
        }
        
        $sql = "UPDATE arrest SET $arrestColumn = '$valueUpdate' WHERE arrest_ID  = $arrestId";
        $results = query($sql);
        $results = confirm($results);
        redirect("http://localhost/criminalrecordmanagementsystem/arrests_files.php");

    
    } else {
        redirect("http://localhost/criminalrecordmanagementsystem/update_arrests_files.php");
        echo "Something went wrong, Unable to update the arrest record";
    }


} // SERVER METHOD POST

?>