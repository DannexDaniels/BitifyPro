<body class="bg-dark">
<div class="container">
    <div class="card card-login mx-auto mt-5">
        <div class="card-header">Login</div>
        <div class="card-body">
            <form action="/authentication/login" method="post">
                <div class="form-group">
                    <label for="exampleInputEmail1">Username</label>
                    <input class="form-control" name="uname" id="exampleInputEmail1" type="text" aria-describedby="emailHelp" placeholder="Enter Username" required>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input class="form-control" name="pass" id="exampleInputPassword1" type="password" placeholder="Password" required>
                </div>
                <div class="form-group">
                    <div class="form-check">
                        <label class="form-check-label">
                            <input class="form-check-input" type="checkbox"> Remember Password</label>
                    </div>
                </div>
                <input type="submit" name="register" value="Login" class="btn btn-primary btn-block"/>
            </form>
            <div class="text-center">
                <a class="d-block small mt-3" href="<?php echo base_url('register'); ?>">Register an Account</a>
                <a class="d-block small" href="<?php echo base_url('forgot_password'); ?>">Forgot Password?</a>
            </div>
        </div>
    </div>
</div>