<body class="bg-dark">
<div class="container">
    <div class="card card-register mx-auto mt-5">
        <div class="card-header">Register an Account</div>
        <div class="card-body">
            <form>
                <div class="form-group">
                    <div class="form-row">
                        <div class="col-md-6">
                            <label for="exampleInputName">First name</label>
                            <input class="form-control" id="exampleInputName" type="text" aria-describedby="nameHelp" placeholder="Enter first name" required>
                        </div>
                        <div class="col-md-6">
                            <label for="exampleInputLastName">Last name</label>
                            <input class="form-control" id="exampleInputLastName" type="text" aria-describedby="nameHelp" placeholder="Enter last name" required>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="username">Username</label>
                    <input class="form-control" id="username" type="text" aria-describedby="emailHelp" placeholder="Enter User Name" required>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input class="form-control" id="exampleInputEmail1" type="email" aria-describedby="emailHelp" placeholder="Enter email"  required>
                </div>
                <div class="form-group">
                    <label for="country">Enter Country</label>
                   <input class="form-control" id="country" type="text" aria-describedby="emailHelp" placeholder="Enter Country"  required>
                </div>
                <div class="form-group">
                    <div class="form-row">
                        <div class="col-md-6">
                            <label for="exampleInputPassword1">Password</label>
                            <input class="form-control" id="exampleInputPassword1" type="password" placeholder="Password"  required>
                        </div>
                        <div class="col-md-6">
                            <label for="exampleConfirmPassword">Confirm password</label>
                            <input class="form-control" id="exampleConfirmPassword" type="password" placeholder="Confirm password" required>
                        </div>
                    </div>
                </div>
                <input type="submit" value="Register" class="btn btn-primary btn-block" href="login.html">
            </form>
            <div class="text-center">
                <a class="d-block small mt-3" href="<?php echo base_url('login'); ?>">Login Page</a>
                <a class="d-block small" href="<?php echo base_url('forgot_password'); ?>">Forgot Password?</a>
            </div>
        </div>
    </div>
</div>