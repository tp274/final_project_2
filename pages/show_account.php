<?php
include 'header.php';
?>
<div class="card bg-light">
    <div class="card-header">
        <h4>Update Your Account</h4>
    </div>
    <div class="card-body" >
        <div class="container" >
            <div class="row">
                <div class="col-sm-5">
                            <form action="index.php?page=accounts&action=save&id=<?php echo $data->id; ?>" method="post" class="login-form">
                                <div class="form-group">
                                    <label class="sr-only" for="form-username">First Name:</label>
                                    <input type="text" value="<?php echo htmlspecialchars($data->fname,ENT_QUOTES,'UTF-8'); ?>" name="fname" placeholder="First Name.." class="form-username form-control" id="fname" required>
                                </div>
                                <div class="form-group">
                                    <label class="sr-only" for="form-password">Last Name:</label>
                                    <input type="text" name="lname" value="<?php echo htmlspecialchars($data->lname,ENT_QUOTES,'UTF-8'); ?>" placeholder="last name.." class="form-password form-control" id="lname" required>
                                </div>
                                <div class="form-group">
                                    <label class="sr-only" for="form-username">Email:</label>
                                    <input type="email" value="<?php echo htmlspecialchars($data->email,ENT_QUOTES,'UTF-8'); ?>" name="email" placeholder="email.." class="form-username form-control" id="email" required>
                                </div>
                                <div class="form-group">
                                <label class="sr-only" for="form-username">Phone:</label>
                                <input type="text" value="<?php echo htmlspecialchars($data->phone,ENT_QUOTES,'UTF-8'); ?>" name="phone" placeholder="phone.." class="form-username form-control" id="phone" required>
                                 </div>
                                <div class="form-group">
                                    <label class="sr-only" for="form-username">Birthday:</label>
                                    <input type="date" name="birthday" placeholder="" class="form-username form-control" value="<?php echo htmlspecialchars($data->birthday,ENT_QUOTES,'UTF-8'); ?>">
                                </div>
                                <div class="form-group" align="left">
                                    Gender:
                                  <label>  <input type="radio"   name="gender" value="male" <?php echo ($data->gender == 'male') ? 'checked="checked"' : ''; ?>  /> Male </label>
                                    <label>   <input type="radio"   placeholder="" name="gender" value="female" <?php echo ($data->gender == 'female') ? 'checked="checked"' : ''; ?> /> Female </label>
                                </div>

                        <button type="submit" class="btn btn-info">Update</button>
                        </form>
                    </div>
                </div>


            </div>
        </div>
</div>

<?php
include 'footer.php';
?>

