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
                <h3 class="text-center mt-3">Registration Form</h3>

                <form action="form-data.php" method="POST">

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

                    <button type="submit" class="btn btn-primary">Register</button>

                    <p class="text-center">Have an account? <a href="">Log In</a> </p>

                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>


</body>

</html>