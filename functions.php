<?php 
    function checkField($item){
        if(isset($_POST['item']) && !empty($_POST['item']) && trim($_POST['item'])){
            return true;
        } else {
            return false;
        }
    }
    function displayErrorMesage($error, $item){
        if(array_key_exists($error, $item)){
            return '<span class="error">'. $error['index'] . '</span>';
        }
        return false;
    }
    function 
?>

<!-- For employee
name, address, contact,  email, dob, skills, experience, level, department, username, password 

For Manager
name, address, contact, email, dob, department, username, password

For Adminstrator
name, address, contact, email, username, password

-->