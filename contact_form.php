<?php

$connection = mysqli_connect('localhost','root','','contact_db');

if(isset($_POST['send'])){
    $firstname = $_POST['firstname'];
    $surname = $_POST['surname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $projecttitle = $_POST['projecttitle'];
    $descrproject = $_POST['descrproject'];


    $request = "INSERT INTO contact_form (firstname,surname,email,phone,projecttitle,descrproject) values ('$firstname','$surname','$email','$phone','$projecttitle','$descrproject') ";
    mysqli_query($connection, $request);

    header('location:contact.php');

}else{
    echo 'something went wrong please try again!';
}

?>
