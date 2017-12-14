<?php
include 'header.php';
//this is how you print something

if($data == false){
    echo '<p> You have no tasks </p>';
}else{
    print utility\htmlTable::genarateTableFromMultiArray($data);
}

?>
<html>
<body>
<form action="index.php?page=tasks&action=create" method="post" id="form1">
    <button type="submit" form="form1" value="create">Create Task</button>
</form>
<!--<h1><a href="index.php?page=tasks&action=create">create task</a></h1> -->
</body>
</html>
