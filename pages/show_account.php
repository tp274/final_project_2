<?php
include 'header.php';
?>

<form action="index.php?page=accounts&action=save&id=<?php echo $data->id; ?>" method="post">

    First name: <input type="text" name="fname" value="<?php echo $data->fname; ?>"><br>

    Last name: <input type="text" name="lname" value="<?php echo $data->lname; ?>"><br>
    Email: <input type="text" name="email" value="<?php echo $data->email; ?>"><br>
    Phone: <input type="text" name="phone" value="<?php echo $data->phone; ?>"><br>
    Birthday: <input type="text" name="birthday" value="<?php echo $data->birthday; ?>"><br>
    Gender:
    <input type="radio" name="gender" value="male" <?php echo ($data->gender == 'male') ? 'checked="checked"' : ''; ?>  />Male
    <input type="radio" name="gender" value="female" <?php echo ($data->gender == 'female') ? 'checked="checked"' : ''; ?> />Female
    <input type="submit" value="Submit form">
</form>


