<?php
include 'header.php';
?>
<div class="card">
    <div class="card-header">
        <h4>Edit Task</h4>
    </div>
<div class="card-body" >
    <div class="container" >
        <div class="row">
            <div class="col-sm-5">
                       <form action="index.php?page=tasks&action=save&id=<?php echo $data->id; ?>" method="post" class="login-form">
                            <div class="form-group">
                                <label class="sr-only" for="form-username">Owner Email</label>
                                <input type="text" required value="<?php echo $data->owneremail; ?>" name="owneremail" placeholder="Owner email.." class="form-username form-control" id="owneremail">
                            </div>
                            <div class="form-group">
                                <label class="sr-only" for="form-password">Due Date</label>
                                <input type="text" name="duedate" placeholder="Due date.."value="<?php echo htmlspecialchars($data->duedate); ?>"class="form-password form-control" id="duedate" required>
                            </div>
                           <div class="form-group" align="left">
                               Is done?
                       <label>   <input type="radio" name="isdone" value="1" <?php echo ($data->isdone == '1') ? 'checked="checked"' : ''; ?>  /> Yes </label>
                               <label>      <input type="radio" name="isdone" value="0" <?php echo ($data->isdone == '0') ? 'checked="checked"' : ''; ?> /> No </label>
                           </div>
                           <div class="form-group">
                          <label class="sr-only" for="form-username">Message:</label>
                               <textarea type="text" value="<?php echo $data->message; ?>" name="message" placeholder="Message.." class="form-username form-control" id="message" required></textarea>
                          </div>

                            <button type="submit" class="btn">Update</button>
                        </form>
                    </div>
                </div>
        </div>
    </div>
</div>
<?php
include 'footer.php';
?>