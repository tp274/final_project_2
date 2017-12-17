
<!doctype html>
<html lang="en">
  <head>
    <title>Task Management system</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">


      <!-- Custom styles for this template -->
      <link href="css/sticky-footer-navbar.css" rel="stylesheet">
  </head>
  <body style="background: #E0E4CC">
  <div class="container">

      <div class="page-header" align="center">
          <h1>NJIT Task Management</h1>
          <p>Manage your tasks with simple clicks.</p>
      </div>

<?php
if(key_exists('userID',$_SESSION)) {
    //$userID = $_SESSION['userID'];
    include 'authenticated_user_menu.php';
} else {

    include 'login_form.php';
}

?>