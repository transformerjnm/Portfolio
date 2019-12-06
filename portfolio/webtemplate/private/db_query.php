<?php 

function find_user_by_email($email){
    global $db;
    $sql = "SELECT * FROM users ";
    $sql .= "WHERE email = '".mysqli_real_escape_string($db, $email)."' ";
    $result = mysqli_query($db, $sql);
    $confirm = confirm_result_set($result);
    if($confirm){
        $user = mysqli_fetch_assoc($result);
        mysqli_free_result($result);      
        return $user;
    }
}
function register($new_user){
    global $db;
    $new_user['hashed_password'] = password_hash($new_user['password'], PASSWORD_BCRYPT);
    $sql = "INSERT INTO users (hashed_password,firstname,lastname,email) ";
    $sql .= "VALUES ('";
    $sql .= mysqli_real_escape_string($db, $new_user['hashed_password'])."',";
    $sql .="'".mysqli_real_escape_string($db, $new_user['firstname'])."',";
    $sql .="'".mysqli_real_escape_string($db, $new_user['lastname'])."',";
    $sql .="'".mysqli_real_escape_string($db, $new_user['email'])."'";
    $sql .=")";
    $result = mysqli_query($db, $sql);
    if($result) {
        redirect_to("template.php");
        return true;
    } else {
        // INSERT failed
        echo mysqli_error($db);
        db_disconnect($db);
        exit;
    }
}
function check_email_exist($email){
    global $db;
    $sql = "SELECT email FROM users ";
    $sql .= "WHERE email = '".mysqli_real_escape_string($db, $email)."' ";

    $result = mysqli_query($db, $sql);
    $email = mysqli_fetch_assoc($result);
    if($email){
        return true;
    }else{
        return false;
    }
}
?>