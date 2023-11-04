<?php

$firstname =$_POST['firstname'];
$lastname =$_POST['lastname'];
$email =$_POST['email'];

$errors = [
'firstNameError' => '',
'lastNameError' => '',
'emailError' => '',

];  
if (isset($_POST['submit'])) {
    $firstName = mysqli_real_escape_string($conn, $_POST['firstName']);
    $lastname = mysqli_real_escape_string($conn, $_POST['lastname']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);

    $sql ='INSERT INTO user (firstname,lastname,email) values ($firstname,$lastname,$email)';
    
    if (empty($firstname)) {
        $errors['firstNameError'] = 'يرجى ادخال الاسم الاول';
    } elseif(empty($lastname)) {
        $errors['lastNameError'] = 'يرجى ادخال الاسم الاول';

    }elseif(empty($email)){
        $errors['emailError'] = 'يرجى ادخال الاسم الاول';
    }elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors['emailError'] = 'يرجى ادخال الايميل';
    }else {
        if (mysqli_query($conn,$sql)) {
            header('location:'.$_SERVER['PHP_SELF']);
         } else {
            echo 'fail';
         }
    }
    

    
}
