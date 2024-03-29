<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Registration Form</title>
</head>

<body>
      <?php
                            function validate($message, $msgAlert = "danger") {

                            return "<div class=\"alert alert-{$msgAlert} alert-dismissible fade show\" role=\"alert\">
                                        {$message}!
                                        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
                                    </div>";
                        }

                        /**
                         * Function validEmail for check email valid or not.
                         */
                        function validEmail($email) {

                            if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
                                return true;
                            } else {
                                return false;
                            }
                        }

                        /**
                        * Function eduMail for filtering institution email addresses
                        */
                        function eduMail($email) {

                            $valid_emails = array('uttarauniversity.edu.bd', 'diu.edu.bd', 'ewubd.edu', 'brac.edu.bd', 'nsu.edu.bd');
                            $email_arr = explode('@', $email, 2);
                            if (in_array(end($email_arr), $valid_emails)) {
                                return true;
                            } else {
                                return false;
                            }
                        }


                            /**
                             * validateUsername for valid username regular expression
                             */
                            function valid_username($username) {
                                
                                // \w = 0-9A-Za-z_
                                if (preg_match('/^[0-9A-Za-z_]{5,20}$/', $username)) {
                                    return true;
                                } else {
                                    return false;
                                }
                            }

                            
                            /**
                             * If error occured keep form value function
                             */
                            function insertValue($inputField)
                            {

                                if (isset($_POST[$inputField])) {
                                    echo $_POST[$inputField];
                                } else {
                                    echo ' ';
                                }
                            }


                            /**
                            * After succeful form submission clear all form value function
                            */
                                function clearFormValue() {
                                    $_POST = '';
                                }


    

                        if (isset($_POST['submit'])) {
                            $full_name = $_POST['full_name'];
                            $username = $_POST['username'];
                            $phone = $_POST['phone'];
                            $email_address = $_POST['email_address'];
                            $department = $_POST['department'];
                            $section = $_POST['section'];
                            $dob = $_POST['dob'];
                          
                            $gender = ' ';
                                if (isset($_POST['gender'])) {
                                    $gender = $_POST['gender'];
                                }

                            $is_agree = ' ';
                                if (isset($_POST['is_agree'])) {
                                    $is_agree = $_POST['is_agree'];
                                }


                            //   print_r($_POST);


                            if (empty($full_name) || empty($username) || empty($phone) || empty($email_address) || empty($department) || empty($section) || empty($dob) || empty($gender)) {

                                $validation_msg = validate('All fields are required');

                            } elseif (valid_username($username) == false) {
                                $validation_msg = validate('The username is not valid', 'warning');

                            } elseif (validEmail($email_address) == false) {

                                    $validation_msg = validate('Email is not valid', 'warning');

                                } elseif (eduMail($email_address) == false) {

                                    $validation_msg = validate('Email is not a edu mail', 'warning');

                            } elseif ($is_agree != 'yes') {
                                    $validation_msg = validate('Please agree terms and conditions', 'warning');
                            } else {
                                $validation_msg = validate('Everything okay', 'success');
                                clearFormValue();

                            }
                        }
            ?>


    <div class="container">
          <div class="row">
              <div class="col-md-3"></div>
                    <div class="col-sm-6">
                            <div class="wrap shadow form-div">
              
                                <div class="card bg-info mt-3">
                                    <div class="card-body">
                                            <h3 class="text-center mt-3">Registration Form</h3>

                                                    <?php
                                                        if (isset($validation_msg)) {
                                                            echo $validation_msg;
                                                        }
                                                    ?>

                                        <form action="" method="POST" autocomplete="off">

                                            <div class="form-group mb-3">
                                                    <label for="name" class="form-label">Full Name</label>
                                                    <input type="text" name="full_name" class="form-control" id="name" value="<?php insertValue('full_name') ?>" >
                                            </div>

                                            <div class="form-group mb-3">
                                                    <label for="username" class="form-label">Username</label>
                                                    <input type="text" name="username" class="form-control" id="username" value="<?php insertValue('username') ?>">
                                            </div>
                                
                                            <div class="form-group mb-3">
                                                    <label for="email_address" class="form-label">Email address</label>
                                                    <input type="text" name="email_address" class="form-control" id="email_address" value="<?php insertValue('email_address')  ?>">
                                            </div>

                                            <div class="form-group mb-3">
                                                    <label for="phone" class="form-label">Phone Number</label>
                                                    <input type="tel" name="phone" class="form-control" id="phone" value="<?php insertValue('phone') ?>">
                                            </div>

                                        <div class="form-group mb-3">
                                            <label for="department" class="form-label">Department</label>
                                                <select class="form-select" name="department"  id="department" >
                                                        <option>Choose...</option>
                                                        <option value="<?php insertValue('department')?>" selected><?php insertValue('department')?></option>
                                                        <option value="ICT">ICT</option>
                                                        <option value="HR & Admin">HR & Admin</option>
                                                        <option value="Compliance">Compliance</option>
                                                </select>
                                        </div>

                                        <div class="form-group mb-3">
                                            <label for="section" class="form-label">Section</label>
                                            <select class="form-select" name="section" id="section" >
                                                <option selected>Choose...</option>
                                                
                                                    <option value="IT">IT</option>
                                                    <option value="MIS">MIS</option>
                                                    <option value="HR">HR</option>
                                                    <option value="Admin">Admin</option>
                                            </select>
                                        </div>

                                        <div class="form-group mb-3">
                                            <label for="dob" class="form-label">Date of Birth</label>
                                            <input type="date" name="dob" class="form-control" id="dob" value="<?php insertValue('dob')  ?>">
                                        </div>

                                        <div class="form-group mb-3">
                                            <label class="form-label">Gender</label><br>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="gender" id="inlineRadio1" value="Male">
                                                    <label class="form-check-label" for="male">Male</label>
                                                </div>
                                            
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="gender" id="inlineRadio2" value="Female">
                                                    <label class="form-check-label" for="female">Female</label>
                                                </div>
                                            
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="gender" id="inlineRadio3" value="Others">
                                                    <label class="form-check-label" for="others">Others</label>
                                                </div>
                                            </div>
                        
                                            <div class="form-group mb-3">
                                                <span>Are you agree with our terms and conditions?</span>
                                                <div class="form-check form-check-inline">
                                                    
                                                        <input class="form-check-input" type="checkbox"name="is_agree" id="inlineCheckbox1" value="yes">
                                                        <label class="form-check-label" for="inlineCheckbox1">Yes</label> 
                                                </div>    
                                            </div>

                                            <button type="submit" class="btn btn-success"  name="submit">Register</button>

                                            <p class="text-center">Have an account? <a href="">Log In</a> </p>

                                        </form>

                                 </div>
                             </div>
                        </div>
                    </div>
            </div>
        </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
