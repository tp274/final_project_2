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
                            <h3>Edit Your task </h3>
                        </div>
                        <div class="form-top-right">
                            <i class="fa fa-lock"></i>
                        </div>
                    </div>
                    <div class="form-bottom">
                       <form action="index.php?page=tasks&action=save&id=<?php echo $data->id; ?>" method="post" class="login-form">
                            <div class="form-group">
                                <label class="sr-only" for="form-username">Owner Email</label>
                                <input type="text" value="<?php echo $data->owneremail; ?>" name="owneremail" placeholder="Owner email.." class="form-username form-control" id="owneremail">
                            </div>
                            <div class="form-group">
                                <label class="sr-only" for="form-password">Due Date</label>
                                <input type="text" name="duedate" placeholder="Due date.."value="<?php echo htmlspecialchars($data->duedate); ?>"class="form-password form-control" id="duedate">
                            </div>
                           <div class="form-group" align="left">
                               Is done ?
                           <input type="radio" name="isdone" value="1" <?php echo ($data->isdone == '1') ? 'checked="checked"' : ''; ?>  />Yes
                           <input type="radio" name="isdone" value="0" <?php echo ($data->isdone == '0') ? 'checked="checked"' : ''; ?> />No
                           </div>
                           <div>
                          <label class="sr-only" for="form-username">Message:</label>
                            <input type="text" value="<?php echo $data->message; ?>" name="message" placeholder="Message.." class="form-username form-control" id="message" required>
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