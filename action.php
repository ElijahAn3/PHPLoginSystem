<?php
session_start();
include 'config.php'; // config.php is the database connection.

// SIGN_UP.PHP //
// REGULAR EXPRESSIONS (validation)
if(isset($_POST['submitinfo'])){ 
    $regex = "/^[a-zA-Z\d_\i]{2,60}$/";
    if(preg_match($regex, $_POST['username'])){
        ;
    }else{
        header('location:sign_up.php');
            $_SESSION['username_err']='Please enter a valid username (Max. 60 characters)';
            $_SESSION['type']="danger";
            die();
    }

    $regex = "/^[a-zA-Z\d_\D]{8,60}$/";
    if(preg_match($regex, $_POST['password'])){
        ;
    }else{
        header('location:sign_up.php');
            $_SESSION['pass_err']='Please enter a valid password (Min. 8 characters | Max. 60 characters)';
            $_SESSION['type']="danger";
            die();
    }

    $regex = "/^[a-zA-Z\i]{2,60}$/";
    if(preg_match($regex, $_POST['firstname'])){
        ;
    }else{
        header('location:sign_up.php');
            $_SESSION['fname_err']='Please enter a valid first name (Max. 60 characters)';
            $_SESSION['type']="danger";
            die();
    }

    $regex = "/^[a-zA-Z\i]{2,60}$/";
    if(preg_match($regex, $_POST['lastname'])){
        ;
    }else{
        header('location:sign_up.php');
            $_SESSION['lname_err']='Please enter a valid last name (Max. 60 characters)';
            $_SESSION['type']="danger";
            die();
    }

    $regex = "/^[a-zA-Z\i\d\._]+@[a-zA-Z\i\d\._]+\.[a-zA-Z\i\.]{2,}$/";
    if(preg_match($regex, $_POST['email'])){
        ;
    }else{
        header('location:sign_up.php');
        $_SESSION['email_err']='Please enter a valid email (Max. 60 characters)';
        $_SESSION['type']="danger";
        die();
    }
// END OF REGULAR EXPRESSIONS (validation)

    // PREPARED STATEMENT (insert)
    $user=$_POST['username'];
    $password=$_POST['password'];
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);
    $firstn=$_POST['firstname'];
    $lastn=$_POST['lastname'];
    $email=$_POST['email'];

    $query="INSERT INTO accountdetails(username,hashpass,first_name,last_name,email) VALUES (?,?,?,?,?)";
    $stmt=$conn->prepare($query);
    $stmt->bind_param("sssss",$user,$hashed_password,$firstn,$lastn,$email);
    $stmt->execute();
    $stmt->close();

    header('location:index.php');
}
// END OF SIGN.UP.PHP //


// INDEX.PHP (log-in page) //
// REGULAR EXPRESSIONS (log-in validation)
if (isset($_POST['loginbtn'])){
    $regex = "/^[a-zA-Z\d_\i]{2,60}$/";
    if(preg_match($regex, $_POST['userlogin'])){
        ;
    }else{
        header('location:index.php');
            $_SESSION['username_err']='Please enter a valid username (Max. 60 characters)';
            $_SESSION['type']="danger";
            die();
    }

    $regex = "/^[a-zA-Z\d_\D]{8,60}$/";
    if(preg_match($regex, $_POST['userpass'])){
        ;
    }else{
        header('location:index.php');
            $_SESSION['pass_err']='Please enter a valid password (Min. 8 characters | Max. 60 characters)';
            $_SESSION['type']="danger";
            die();
    }
// END OF REGULAR EXPRESSIONS (log-in validation)

    // PREPARED STATEMENT (select)
    $userlogin=$_POST['userlogin']; // the log-out button is in "logged_in.php"
    $userpass=$_POST['userpass'];
    if ($stmt = $conn->prepare('SELECT username, hashpass FROM accountdetails WHERE username = ?')) {
        $stmt->bind_param("s",$userlogin);
        $stmt->execute();
        // storing the result to check if the account exists in the database
        $stmt->store_result();
        // if num_rows returns 0 the username does not exist in the database
        if($stmt->num_rows == 0){
            header('location:index.php');
            $_SESSION['loginfail']='This user does not exist!';
            $_SESSION['type']="danger";
            die();
        }
        // password_verify()
        $user_result = $stmt->bind_result($user_match,$hashed);
        if ($stmt->fetch()){
            if (password_verify($userpass,$hashed)){
                $_SESSION['user'] = $user_result;
                header('location:logged_in.php');
            }
            else{
                header('location:index.php');
                $_SESSION['passfail']='The username or password is incorrect';
                $_SESSION['type']="danger";
                die();
            }
        }
        $stmt->close();
    }
}
// END OF INDEX.PHP (LOGIN PAGE) //