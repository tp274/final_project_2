


<form action="index.php?page=tasks&action=create" method="post">
    Owner email: <input type="text" name="owneremail" value="<?php echo $data->owneremail; ?>"><br>

Due date: <input type="text" name="duedate" value="<?php echo $data->duedate; ?>"><br>
Message: <input type="text" name="message" value="<?php echo $data->message; ?>"><br>
Is done ?: <input type="text" name="isdone" value="<?php echo $data->isdone; ?>"><br>
    <input type="submit" value="Submit form">
</form>