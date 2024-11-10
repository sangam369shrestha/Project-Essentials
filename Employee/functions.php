<?php 
    function checkRequiredField($item){
        if(isset($_POST[$item]) && !empty($_POST[$item]) && trim($_POST[$item])){
            return true;
        } else{
            return false;
        }
    }
    function checkForPassword($pass){
        if(isset($_POST[$pass]) && !empty($_POST[$pass])){
            return true;
        } else {
            return false;
        }
    }
    function checkForEmail($email){
        if(filter_var($email, FILTER_VALIDATE_EMAIL)){
            return true;
        } 
        return false;
    }
    function displayErrorMessage($error, $index){
        if(array_key_exists($index, $error)){
            return '<span class="error">'. $error[$index].'</span>';
        }
        return false;
    }
    function displaySuccessMessage($error,$index){
        if (array_key_exists($index,$error)) {
            return "<span class='success'>" . $error[$index] . " </span>";
        }
        return false;
    }
    function validateEmail($email){
        if (filter_var($email,FILTER_VALIDATE_EMAIL)) {
            return true;
        }
        return false;
    }
    function insertIntoDatabase($name, $email, $password, $contact, $gender, $faculty){
        try{
            $connect = new mysqli('localhost', 'root', '', 'projects');
            $sql = "insert into registrations(name, email, password, phone, gender, faculty) values ('$name', '$email', '$password', $contact, '$gender', '$faculty')";
            $connect->query($sql);
            if($connect->insert_id > 0 && $connect->affected_rows == 1){
                return true;
            }
            return false;
        } catch (\Throwable $th){
            die('Error: ' . $th->getMessage());
        }
        
    }
    function newInsertDatabase($name, $email, $username, $password){
        try{
            $connect = new mysqli('localhost', 'root', '', 'tms_db');
            $sql = "insert into details(name, email, username, password) values('$name', '$email', '$username', '$password')";
            $connect->query($sql);
            if($connect->insert_id > 0 && $connect->affected_rows == 1){
                return true;
            } else {
                return false;
            }
        }catch(\Throwable $th){
            die('Error: '. $th->getMessage());
        }
    }
?>