<?php 

    $full_name       = $_POST['full_name'];
    $phone              = $_POST['phone'];
    $email               = $_POST['email'];
    $department      = $_POST['department'];
    $section             = $_POST['section'];
    $company          = $_POST['company'];

        if ($full_name == '' || $phone == '' || $email == '' || $department == '' || $section == '' || $company == '') {
            echo "All fields are required!";
        } else {
            echo "Everything is Okay!";
        }

?>