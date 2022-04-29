<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Document</title>
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <h3 class="text-center mt-3">Create Account</h3>

                <form action="form-data.php" method="POST">

                    <div class="mb-3">
                        <label for="name" class="form-label">Full Name</label>
                        <input type="text" name="name" class="form-control" id="name" placeholder="Enter Your Name...">
                    </div>

                    <div class="mb-3">
                        <label for="designation" class="form-label">Designation</label>
                        <select name="designation" class="form-control" id="designation">
                            <option selected>---Select Your Designation---</option>
                            <option value="Officer">Officer</option>
                            <option value="Executive">Executive</option>
                            <option value="Sr. Executive">Sr. Executive</option>
                            <option value="Manager">Manager</option>
                            <option value="Sr. Manager">Sr. Manager</option>
                            <option value="Asst. Manager">Asst. Manager</option>
                            <option value="Deputy Manager">Deputy Manager</option>
                            <option value="Data Entry Operator">Data Entry Operator</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="office-id" class="form-label">Office ID</label>
                        <input type="text" name="office_id" class="form-control" id="office_id"
                            placeholder="Enter Your Office ID No..." required>
                    </div>

                    <div class="mb-3">
                        <label for="phone" class="form-label">Phone Number</label>
                        <input type="text" name="phone" class="form-control" id="phone"
                            placeholder="Enter Your Phone Number...">
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label">Email address</label>
                        <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp"
                            placeholder="Enter Your Email...">
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


                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" id="password"
                            placeholder="Enter Your Password...">
                    </div>

                    <div class="mb-3">
                        <label for="confirm_password" class="form-label">Confirm Password</label>
                        <input type="password" name="password_confirmation" class="form-control" id="confirm_password"
                            placeholder="Confirm Your Password...">
                    </div>

                    <button type="submit" class="btn btn-primary">Create Account</button>

                    <p class="text-center">Have an account? <a href="">Log In</a> </p>

                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>


</body>

</html>