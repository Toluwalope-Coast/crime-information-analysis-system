<?php 

/******* 
     This script Delete Case Record from the database
     
    @author Toluwalope Coast <rodneytoluwalope@gmail.com>
     
*******/

ob_start();

session_start();

require "db.php";

require "functions.php";



deleteCaseRecord();


/******* 
     This function Delete Case Record from the database

     
*******/

function deleteCaseRecord()
{

    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        
        $id = clean_int_data($_POST['id']);

        $sql = "DELETE FROM case_file WHERE id = $id";

        $results = query($sql);
        confirm($results);
        redirect("http://localhost/criminalrecordmanagementsystem/case_files.php");

    
    } else {
        redirect("http://localhost/criminalrecordmanagementsystem/delete_case_files.php");
        echo "Something went wrong, Unable to delete the case record";
    }


} // SERVER METHOD POST

?>