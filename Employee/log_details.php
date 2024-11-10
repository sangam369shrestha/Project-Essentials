<?php 
    require_once 'functions.php';
    
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $err[] = 0;
        if(checkRequiredField('name')){
            $name = $_POST['name'];
        } else {
            $err['name'] = 'Name is required';
        }

        if(checkRequiredField('email')){
            $email = $_POST['email'];
            if(!checkForEmail('email')){
                $err['email'] = 'Invalid email format';
            }
        } else {
            $err['email'] = 'Email is required';
        }
        if(checkRequiredField('username')){
            $username = $_POST['username'];
        } else {
            $err['username'] = $_POST['username'];
        } 
        if (checkForPassword('password')) {
            $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
        } else {
            $err['password'] = 'Invalid password format';
        }

        if(count($err) == 0){
            if(newInsertDatabase($name, $email, $username, $password)){
                $err['success'] = 'Details insert success';
            } else {
                $err['error'] = 'Details insert failed';
            }
        }
    }
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input</title>
</head>
<body>
    <form action="" method="post" enctype="multipart/form-data">
        <fieldset>
            <legend>Fill</legend>
            <div class="frm">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" value="<?php echo isset($name)?$name:''; ?>">
                <span class="err"><?php echo isset($err['name'])?$err['name']:''; ?></span>
            </div>
            <div class="frm">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" value="<?php echo isset($email)?$email:''; ?>">
                <span class="err"><?php echo isset($err['email'])?$err['email']:''; ?></span>
            </div>
            <div class="frm">
                <label for="username">Username</label>
                <input type="text" name="username" id="username" value="<?php echo isset($username)?$username:''; ?>">
                <span class="err"><?php echo isset($err['username']) ? $err['username']:''; ?></span>
            </div>
            <div class="frm">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" value="<?php echo isset($password)?$password:''; ?>">
                <span class="err"><?php echo isset($err['password'])?$err['password']:''; ?></span>
            </div>
            <div class="frm">
                <input type="submit" value="Submit">
            </div>
        </fieldset>
    </form>
</body>
</html>