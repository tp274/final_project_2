//Not needed
<?php
include 'header.php';

?>

<div class="top-content">

    <div class="inner-bg" >
        <div class="container" >
            <div class="row">
                <div class="col-sm-5">

                    <div class="form-box">
                        <div class="form-top">
                            <div class="form-top-left">
                                <h3>Update Account </h3>
                            </div>
                            <div class="form-top-right">
                                <i class="fa fa-lock"></i>
                            </div>
                        </div>
                        <div class="form-bottom">
                            <form action="index.php?page=accounts&action=register" method="post" class="login-form">
                                <div class="form-group">
                                    <label class="sr-only" for="form-username">First Name:</label>
                                    <input type="text"  name="owmeremail" placeholder="First Name.." class="form-username form-control" id="fname" required>
                                </div>
                                <div class="form-group">
                                    <label class="sr-only" for="form-password">Last Name:</label>
                                    <input type="text" name="lname"  placeholder="last name.." class="form-password form-control" id="lname" required>
                                </div>
                                <div class="form-group">
                                    <label class="sr-only" for="form-username">Email:</label>
                                    <input type="text"  name="email" placeholder="email.." class="form-username form-control" id="email" required>
                                </div>
                                <div class="form-group">
                                    <label class="sr-only" for="form-username">Phone:</label>
                                    <input type="text"  name="phone" placeholder="phone.." class="form-username form-control" id="phone" >
                                </div>
                                <div class="form-group">
                                    <label class="sr-only" for="form-username">Birthday:</label>
                                    <input type="date" name="birthday" placeholder="" class="form-username form-control" >
                                </div>
                                <div class="form-group" align="left">
                                    Gender:
                                    <input type="radio"   name="gender" value="male" >Male
                                    <input type="radio"   placeholder="" name="gender" value="female" >Female
                                </div>
                                <div class="form-group">
                                    <label class="sr-only" for="form-password">Password</label>
                                    <input type="password" name="password" placeholder="Password..." class="form-password form-control" id="form-password">
                                </div>
                                <button type="submit" class="btn">Update</button>
                            </form>
                        </div>
                    </div>


                </div>
            </div>




