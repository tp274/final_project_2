<?php
include 'header.php';
?>
<div class="card">
<div class="card-header">
    <h4>Create New Task</h4>
</div>
    <div class="card-body" >
        <div class="container" >
            <div class="row">
                <div class="col-sm-5">

                            <form action="index.php?page=tasks&action=create" method="post" class="login-form">
                                <div class="form-group">
                                    <label class="sr-only" for="form-username">Owner Email</label>
                                    <input type="email" name="owneremail" placeholder="Owner email.." class="form-owneremail form-control" id="owneremail" required>
                                </div>
                                <div class="form-group" align="left">
                                    Is done?
                                 <label>   <input type="radio" name="isdone" value="1" > Yes </label>
                                <label>  <input type="radio" name="isdone" value="0"  checked="checked"> No </label>
                                </div>
                                <div class="form-group">
                                    <label class="sr-only" for="form-username">Due date:</label>
                                    <input type="date" required name="duedate" placeholder="due date.." class="form-duedate form-control" id="duedate">
                                </div>
                                <div class="form-group">
                                    <label class="sr-only" for="form-username">Message:</label>
                                    <textarea  name="message" placeholder="Message.." class="form-message form-control" id="message" required></textarea>
                                </div>

                                <button type="submit" class="btn">Submit</button>
                            </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
include 'footer.php';
?>