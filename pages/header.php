
<!doctype html>
<html lang="en">
  <head>
    <title>Task Management system</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
      <link href="../../dist/css/bootstrap.min.css" rel="stylesheet">

      <!-- Custom styles for this template -->
      <link href="css/sticky-footer-navbar.css" rel="stylesheet">
  </head>
<body>
<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
if(key_exists('userID',$_SESSION)) {
    //$userID = $_SESSION['userID'];
    include 'authenticated_user_menu.php';
} else {

    include 'login_form.php';
}

?>