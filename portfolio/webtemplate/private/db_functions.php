<?php

function db_connect(){
    $connecting = mysqli_connect('localhost', 'jacob_jmitch37', '2352webuser', 'jacob_id7280983_webtemplate');
    //$connecting = mysqli_connect('localhost', 'webuser', 'webuser', 'web_template');
    confirm_db_connect();
    return $connecting;
}
function db_disconnect($connecting){
    if(isset($connecting)){
        mysqli_close($connecting);
    }
}

function confirm_db_connect() {
    if(mysqli_connect_errno()) {
        $msg = "Database connection failed: ";
        $msg .= mysqli_connect_error();
        $msg .= " (" . mysqli_connect_errno() . ")";
        exit($msg);
    }
}

function login($email, $password){
    global $errors;
    //TODO Fix error messages!
    $user = find_user_by_email($email);
    //user same message no matter if email or pwd wrong. harder to hack.
    $log_failure = " Failure to log in. please check username and password. ";
    //if it finds the username
    if ($user){
        //check pwd
        if(password_verify($password, $user['hashed_password'])){
            //login
            session_regenerate_id();
            //ALL Valuse must be unset on logout. if add new valuse to sesson unset them on logout.php
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['user_name'] = $user['firstname']." ".$user['lastname'];
            $_SESSION['admin'] = $user['admin'];
           redirect_to("template.php");
        }else{
            //pwd wrong
            $errors .= $log_failure."pwd";
        }
    }else{
        //username is wrong
        $errors .= $log_failure."user";
    }
}


function confirm_result_set($result_set) {
    if (!$result_set) {
        global $errors;
        //return error message and exits current script. not sure if or how the message is displated to the usser
       // exit("Database query failed.");
        $errors .= "Database query failed";
        return false;
    }
    return true;
}
?>
