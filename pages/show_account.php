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
                        <div class="form-bottom" style="background: ">
                            <form action="index.php?page=accounts&action=save&id=<?php echo $data->id; ?>" method="post" class="login-form">
                                <div class="form-group">
                                    <label class="sr-only" for="form-username">First Name:</label>
                                    <input type="text" value="<?php echo $data->fname; ?>" name="owmeremail" placeholder="First Name.." class="form-username form-control" id="fname" required>
                                </div>
                                <div class="form-group">
                                    <label class="sr-only" for="form-password">Last Name:</label>
                                    <input type="text" name="lname" value="<?php echo $data->lname; ?>" placeholder="last name.." class="form-password form-control" id="lname" required>
                                </div>
                                <div class="form-group">
                                    <label class="sr-only" for="form-username">Email:</label>
                                    <input type="text" value="<?php echo $data->email; ?>" name="email" placeholder="email.." class="form-username form-control" id="email" required>
                                </div>
                                <div class="form-group">
                                <label class="sr-only" for="form-username">Phone:</label>
                                <input type="text" value="<?php echo $data->phone; ?>" name="phone" placeholder="phone.." class="form-username form-control" id="phone" >
                                 </div>
                                <div class="form-group">
                                    <label class="sr-only" for="form-username">Birthday:</label>
                                    <input type="date" name="birthday" placeholder="" class="form-username form-control" value="<?php echo htmlspecialchars($data->birthday); ?>">
                                </div>
                                <div class="form-group" align="left">
                                    Gender:
                                    <input type="radio"   name="gender" value="male" <?php echo ($data->gender == 'male') ? 'checked="checked"' : ''; ?>  />Male
                                    <input type="radio"   placeholder="" name="gender" value="female" <?php echo ($data->gender == 'female') ? 'checked="checked"' : ''; ?> />Female
                                </div>

                        <button type="submit" class="btn">Update</button>
                        </form>
                    </div>
                </div>


            </div>
        </div>

<?php
include 'footer.php';
?>

