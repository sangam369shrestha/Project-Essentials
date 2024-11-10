<?php 
require_once 'functions.php';


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Employee</title>
</head>
<body>
    <div class="emp">
        <form action="" method="post">
            <fieldset>
                <legend>Enter the details of employees</legend>
                <div class="inp">
                    <label for="name">Name</label>
                    <input type="text" name="name" id="name">
                </div>
                <div class="inp">
                    <label for="address">Address</label>
                    <input type="text" name="address" id="address">
                </div>
                <div>
                    <label for="contact">Contact</label>
                    <input type="number" name="contact" id="contact">
                </div>
                <div class="inp">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email">
                </div>
                <div class="inp">
                    <label for="dob">Date of Birth</label>
                    <input type="date" name="dob" id="dob">
                </div>
                <div class="inp">
                    <label for="skills">Skills</label>
                    <textarea name="skills" id="skills"></textarea>
                </div>
                <div class="inp">
                    <label for="level">Level</label>
                    <input type="radio" name="level" id="level">Junior
                    <input type="radio" name="level" id="level">Intermediate
                    <input type="radio" name="level" id="level">Senior
                </div>
                <div class="inp">
                    <select name="department" id="department">
                        <option value="">Web Development</option>
                    </select>
                </div>
                <div class="inp">
                    <label for="username">Username</label>
                    <input type="text" name="username" id="username">
                </div>
                <div class="inp">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password">
                </div>
                <div class="inp">
                    <label for="profile">Profile Picture</label>
                    <input type="file" name="profile" id="profile">
                </div>
            </fieldset>
        </form>
        
        
    </div>
</body>
</html>