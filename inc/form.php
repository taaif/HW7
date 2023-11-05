<?php 

$firstName = $_POST['firstname'];
$lastName = $_POST['lastname'];
$email = $_POST['email'];

$errors = [
    'firstNameError' => '' , 
    'lastNameError' => '' ,
    'emailError' => ''
];

if (isset($_POST['submit'])){
    //validation first name
    if (empty($firstName)) {
        $errors['firstNameError'] = 'يرجى ادخال الاسم الاول';
    }//validation last name
    if (empty($lastName)) {
        $errors['lastNameError'] = 'يرجى ادخال الاسم الثاني';
    }//validation email
    if (empty($email)) {
        $errors['emailError'] = 'يرجلى ادخال ايميل';
    }elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors['emailError'] = 'يرجلى ادخال ايميل صحيح';
    }

    //validation no error
    if(!array_filter($errors)){
        $firstName = mysqli_real_escape_string($conn, $_POST['firstname']);
        $lastName = mysqli_real_escape_string($conn, $_POST['lastname']);
        $email = mysqli_real_escape_string($conn, $_POST['email']);

        $sql = "INSERT INTO users(firstName, lastName, email) VALUES ('$firstName', '$lastName', '$email' )"; 

        if (mysqli_query($conn, $sql)) {
            header('Location: '  . $_SERVER['PHP_SELF']);
        } else {
            echo 'Error: ' . mysqli_connect_error($conn);
        }
    }
}