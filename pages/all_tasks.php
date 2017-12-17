<?php
include 'header.php';
?>
<div class ="card">
  <div class ="card-body">
<?php
if($data == false){
    echo '<p> You have no tasks. </p>';
}else{
    print utility\htmlTable::genarateTableFromMultiArray($data);
}
?>

<h3><a  href="index.php?page=tasks&action=create">Create Task</a></h3>
    </div>
</div>
<?php
include 'footer.php';
?>