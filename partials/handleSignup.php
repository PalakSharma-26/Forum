<?php
$showError = "false";
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    include '_db.php';
    $user_email = $_POST['signupEmail'];
    $pass = $_POST['signupPassword'];
    $cpass = $_POST['signupcPassword'];
    
    // check whether user name already exists
    $existSql = "SELECT * FROM `userstable` WHERE user_email = '$user_email'";
    $result = mysqli_query($conn,$existSql);
    // echo $result;
    $num = mysqli_num_rows($result); 
    if($num>0){
        $showError = "Email is already in use";
    }
    else{
        if($pass == $cpass){
            $hash = password_hash($pass, PASSWORD_DEFAULT);
            $sql = "INSERT INTO `userstable` (`user_email`, `user_pass`, `timestamp`) VALUES ('$user_email', '$hash', current_timestamp())";
            $result = mysqli_query($conn,$sql);
            if($result){
                $ShowALert = true;
                header("Location: /forum/index.php?signupsuccess=true");
                exit();
            }
        }
        else{
            $showError = "Password donot match";  
        }
    }
    header("Location: /forum/index.php?signupsuccess=tfalse&error=$showError");
}


?>
