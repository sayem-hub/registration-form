
	<?php

function validate($message, $msgAlert = "danger")
{
    return "<div class=\"alert alert-{$msgAlert} alert-dismissible fade show\" role=\"alert\">
                {$message}!
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
            </div>";
}

/**
 * Function validEmail for check email valid or not.
 */
function validEmail($email)
{
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        return true;
    } else {
        return false;
    }
}

/**
 * Function eduMail for filtering institution email addresses
 */
function eduMail($email)
{
    $valid_emails = array('uttarauniversity.edu.bd', 'diu.edu.bd', 'ewubd.edu', 'brac.edu.bd', 'nsu.edu.bd');
    $email_arr = explode('@', $email, 2);
    if (in_array(end($email_arr), $valid_emails)) {
        return true;
    } else {
        return false;
    }
}


 if (isset($_POST['submit'])) {
		 $full_name       = $_POST['full_name'];
		 $phone              = $_POST['phone'];
	$email               = $_POST['email'];
	$department      = $_POST['department'];
	$section             = $_POST['section'];
	$company          = $_POST['company'];

		if (empty($full_name) || empty($phone) || empty($email) || empty($department) || empty($section)  || empty($company) ) {
			$validation_msg = validate('All fields are required');

		} else {
			$validation_msg = validate('Everything okay', 'success');

		}
}

?>







