        <div class="container">
           <?php if(isset($_SESSION['flashMessage'])): ?>
            <div class ="row">
                <div class="col-sm-6">
                    <div class="alert alert-info">
                        <?php echo $_SESSION['flashMessage'] ;
                        unset($_SESSION["flashMessage"]);
                        ?>
                    </div>
                </div>
            </div>
            <?php endif?>
            <div class="row">
                <div class="col-sm-6">
                    <div class="card">
                        <div class="card-header">
                                <h4>Login </h4>
                        </div>

                        <div class="card-body">
                            <p>Enter username and password to log on</p>
                            <form role="form" action="index.php?page=accounts&action=login" method="POST" class="login-form">
                                <div class="form-group">
                                    <label class="sr-only" for="form-username">Email</label>
                                    <input type="email" name="email" placeholder="email..." class="form-email form-control" id="form-email" required autofocus>
                                </div>
                                <div class="form-group">
                                    <label class="sr-only" for="form-password">Password</label>
                                    <input type="password" name="password" placeholder="Password..." class="form-password form-control" id="form-password" required>
                                </div>
                                <button type="submit" class="btn btn-info">Sign in</button>
                            </form>
                        </div>
                    </div>
                </div>

    <div class="col-sm-6">

        <div class="card">
            <div class="card-header">
                <div class="form-top-left">
                    <h4>New here? Join now</h4>
                </div>
            </div>
            <div class="card-body">
                <form role="form" action="index.php?page=accounts&action=register" method="POST" class="registration-form">
                    <div class="form-group">
                        <label class="sr-only" for="form-first-name">First name</label>
                        <input type="text" name="fname" placeholder="First name..." class="form-first-name form-control" id="form-first-name" required>
                    </div>
                    <div class="form-group">
                        <label class="sr-only" for="form-last-name">Last name</label>
                        <input type="text" name="lname" placeholder="Last name..." class="form-last-name form-control" id="form-last-name" required>
                    </div>
                    <div class="form-group">
                        <label class="sr-only" for="form-email">Email</label>
                        <input type="email" name="email" placeholder="Email..." class="form-email form-control" id="form-email" required>
                    </div>
                    <div class="form-group">
                        <label class="sr-only" for="form-birthday">Birthday</label>
                        <input type="date" name="birthday" placeholder="Birthday..." class="form-birthday form-control" id="form-birthday" required>
                    </div>
                    <div class="form-group">
                        <label class="sr-only" for="form-phonenumber">Phone number</label>
                        <input type="text" name="phone" placeholder="Phone number..." class="form-phonenumber form-control" id="form-phonenumber" required>
                    </div>
                    <div class="form-group">
                        <label class="sr-only" for="form-email">Gender</label>
                        Gender:
                      <label>  <input type="radio" name="gender" value="male" > Male </label>
                     <label>  <input type="radio" name="gender" value="female" > Female </label>
                    </div>
                    <div class="form-group">
                        <label class="sr-only" for="form-email">Password</label>
                        <input type="password" name="password" placeholder="Password..." class="form-password form-control" id="form-password" required>
                    </div>

                    <button type="submit" class="btn btn-success">Sign up</button>
                </form>
            </div>
        </div>

    </div>
</div>

</div>
