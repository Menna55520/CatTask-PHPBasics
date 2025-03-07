<?php
session_start();
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    // extract data
    $name = $_POST['name'] ; 
    $email = $_POST['email'] ; 
    $msg = $_POST['msg'] ; 

    //validation on data
    $errors = [] ;
    // name
    if(empty($name)){
        $errors[] = "Name Is Required" ;
    }elseif(strlen($name) < 3){
        $errors[] = "Name length Must Be At least 3 chars" ;
    }
    //email
    if(empty($email)){
        $errors[] = "Email Is Required" ;
    }elseif(!filter_var($email , FILTER_VALIDATE_EMAIL)){
        $errors[] = "Enter Email In Right Format" ;
    }
    // msg
    if(empty($msg)){
        $errors[] = "Message Is Required" ;
    }

    // check errors 
    if(empty($errors)){
        // store
        $data = "Name: $name\nEmail: $email\nMessage: $msg\n#######################\n";
        file_put_contents('Data.txt' , $data , FILE_APPEND);
        $_SESSION['success'] = "Data Submitted Successfully" ;
        header("location:index.php");
    }else{
        $_SESSION['errors'] = $errors ;
        $_SESSION['name'] = $name ;
        $_SESSION['email'] = $email ;
        $_SESSION['msg'] = $msg ;
        header("location:index.php");
    }


}else{
    header("loaction:index.php");
}