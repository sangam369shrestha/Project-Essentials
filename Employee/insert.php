<?php require_once 'functions.php';
$err[] = 0;
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    if(checkRequiredField('name')){
        $name = $_POST['name'];
    } else {
        $err['name'] = 'Enter your name';
    }
    if(checkRequiredField('email')){
        $email = $_POST['email'];
        if(!validateEmail('email')){
            $err['email'] = 'Enter the valid email';
        }
        $err['email'] = 'Enter your email';
    }
    if(checkRequiredField('phone')){    
        $phone = $_POST['phone'];
    } else {
        $err['phone'] = 'Enter your phone number';
    }
    if(checkRequiredField('password')){
        $password = $_POST['password'];
    } else {
        $err['password'] = 'Enter the password';
    }
    if(checkRequiredField('gender')){
        $gender = $_POST['gender'];
    } else {
        $err['gencer'] = 'Please select the gender';
    }
    if(checkRequiredField('faculty')){
        $faculty = $_POST['faculty'];
    } else {
        $err['faculty'] = 'Select the faculty';

    }
    if(count($err) == 0){
        if(insertIntoDatabase($name, $email, $password, $phone, $gender, $faculty)){
            $err['success'] = 'Category add success';
        } else {
            $err['error'] = 'Category add failed';
        }
    }
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert</title>
</head>
<body>
    <div class="mn">
    <?php  echo displayErrorMessage($err,'failed')?>
    <?php  echo displaySuccessMessage($err,'success')?>
        <form action="" method = "post" enctype="multipart/from-data">
            <fieldset>
                <div class="form_grp">
                    <label for="name">Name</label>
                    <input type="text" name="name" id="name" value="">
                    <?php  echo displayErrorMessage($err,'title')?>
                </div>
                <div class="form_grp">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email">
                    <?php  echo displayErrorMessage($err,'title')?>
                </div>
                <div class="form_grp">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password">
                    <?php  echo displayErrorMessage($err,'title')?>
                </div>
                <div class="form_grp">
                    <label for="phone">Contact</label>
                    <input type="number" name="phone" id="phone">
                    <?php  echo displayErrorMessage($err,'title')?>
                </div>
                <div class="form_grp">
                    <label for="gender">Gender</label>
                    <input type="radio" name="gender" id="gender">Male
                    <input type="radio" name="gender" id="gender">Female
                    <input type="radio" name="gender" id="gender">Others
                    <?php  echo displayErrorMessage($err,'title')?>
                </div>
                <div class="form_grp">
                    <label for="faculty">Faculty</label>
                    <select name="faculty" id="facultyu">
                        <option value="">Science</option>
                        <option value="">Management</option>
                        <option value="">Law</option>
                        <option value="">Humanities</option>
                    </select>
                    <?php  echo displayErrorMessage($err,'title')?>
                </div>
                <div class="form_grp">
                   <input type="submit" name="save" value="Register">
                </div>
            </fieldset>
        </form>
    </div>
</body>
</html>