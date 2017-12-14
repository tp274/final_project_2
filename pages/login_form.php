<html>
<body  >
<div class="container">

    <form class="form-signin" action="index.php?page=accounts&action=login" method="post">
        <h2 class="form-signin-heading">Please sign in</h2>
        <label for="inputEmail" class="sr-only">Email address</label>
        <input type="email" name = "email" id="email" class="form-control" placeholder="Email address" required autofocus>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" name ="password" id="password" class="form-control" placeholder="Password" required>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
        <h1><a href="index.php?page=accounts&action=register">New Here? Join Us Now</a></h1>
    </form>

</div> <!-- /container -->
</body>
</html>