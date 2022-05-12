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

      if (isset($_POST['submit'])) {
          $full_name = $_POST['full_name'];
          $phone = $_POST['phone'];
          $email_address = $_POST['email_address'];
          $department = $_POST['department'];
          $section = $_POST['section'];
          $company = $_POST['company'];


          if (empty($full_name) || empty($phone) || empty($email_address) || empty($department) || empty($section) || empty($company)) {

              $validation_msg = validate('All fields are required');

          }  elseif (validEmail($email_address) == false) {

                $validation_msg = validate('Email is not valid', 'warning');

            } elseif (eduMail($email_address) == false) {

                $validation_msg = validate('Email is not a edu mail', 'warning');


          } else {
              $validation_msg = validate('Everything okay', 'success');

          }
      }


      ?>


          <div class="container">
              <div class="row">
                  <div class="col-md-3"></div>
                  <div class="col-md-6">
                      <h3 class="text-center mt-3">Registration Form</h3>

                          <?php
                            if (isset($validation_msg)) {
                                echo $validation_msg;
                            }

                          ?>

                <form action="" method="POST">

                    <div class="mb-3">
                        <label for="name" class="form-label">Full Name</label>
                        <input type="text" name="full_name" class="form-control" id="name" placeholder="Enter Your Name...">
                    </div>

                    <div class="mb-3">
                        <label for="phone" class="form-label">Phone Number</label>
                        <input type="tel" name="phone" class="form-control" id="phone"
                            placeholder="Enter Your Phone Number...">
                    </div>

                    <div class="mb-3">
                        <label for="email_address" class="form-label">Email address</label>
                        <input type="text" name="email_address" class="form-control" id="email_address" placeholder="Enter Your Email...">

                    </div>

                    <div class="mb-3">
                        <label for="department" class="form-label">Department</label>
                        <select name="department" class="form-control" id="department">
                            <option selected>---Select Your Department---</option>
                            <option value="ICT">ICT</option>
                            <option value="HR & Admin">HR & Admin</option>
                            <option value="Compliance">Compliance</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="section" class="form-label">Section</label>
                        <select name="section" class="form-control" id="section">
                            <option selected>---Select Your Section---</option>
                            <option value="IT">IT</option>
                            <option value="MIS">MIS</option>
                            <option value="KPI">KPI</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="company" class="form-label">Company</label>
                        <select name="company" class="form-control" id="company">
                            <option selected>---Select Your Company---</option>
                        </select>
                    </div>

                    <button type="submit" class="btn btn-primary"  name="submit">Register</button>

                    <p class="text-center">Have an account? <a href="">Log In</a> </p>

                </form>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
