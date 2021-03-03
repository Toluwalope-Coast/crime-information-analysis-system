<?php 

/******* 
     This script insert Criminal Record into the database
     
    @author Toluwalope Coast <rodneytoluwalope@gmail.com>
     
*******/

ob_start();

session_start();

require "db.php";

require "functions.php";



insertCriminalRecord();


/******* 
     This function insert Criminal Record into the database

     
*******/

function insertCriminalRecord()
{

    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        $firstName = clean_text_data($_POST['firstname']);
        $lastName = clean_text_data($_POST['lastname']);
        $dob = clean_date_data($_POST['date_of_birth']);
        $gender = clean_text_data($_POST['gender']);
        $homeAddress = clean_text_data($_POST['home_address']);
        $city = clean_text_data($_POST['city']);
        $state = clean_text_data($_POST['state']);
        $country = clean_text_data($_POST['country']);
        $empStatus = clean_text_data($_POST['employment_status']);
        $tel = clean_tel_data($_POST['tel_no']);
        $modeOfId = clean_text_data($_POST['mode_of_identification']);
        $idNo = clean_text_data($_POST['id_no']);
        $sql = "INSERT INTO criminal(firstname, lastname, date_of_birth, gender, home_address, city, state_of_residence, country, employment_status, mode_of_identification, id_no) VALUES( '$firstName', '$lastName', '$dob', '$gender', '$homeAddress', '$city', '$state', '$country,' '$empStatus', '$tel', '$modeOfId', '$idNo')";

        $results = query($sql);
        $results = confirm($results);
        $row = fetch_data($results);
        redirect("http://localhost/criminalrecordmanagementsystem/view.php");

    
    } else {
        redirect("http://localhost/criminalrecordmanagementsystem/insert.php");
        echo "Something went wrong, Unable to register criminal record";
    }


} // SERVER METHOD POST

?>