<?php 

/******* 
     This script Delete Arrest Record from the database
     
    @author Toluwalope Coast <rodneytoluwalope@gmail.com>
     
*******/

ob_start();

session_start();

require "db.php";

require "functions.php";



deleteArrestRecord();


/******* 
     This function Delete Arrest Record from the database

     
*******/

function deleteArrestRecord()
{

    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        
        $id = clean_int_data($_POST['arrest_ID']);

        $sql = "DELETE FROM arrest WHERE `arrest`.`arrest_ID` = $id";

        $results = query($sql);
        confirm($results);
        redirect("http://localhost/criminalrecordmanagementsystem/case_files.php");

    
    } else {
        redirect("http://localhost/criminalrecordmanagementsystem/delete_case_files.php");
        echo "Something went wrong, Unable to delete the case record";
    }


} // SERVER METHOD POST

?>