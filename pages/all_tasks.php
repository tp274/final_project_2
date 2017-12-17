<?php
include 'header.php';
?>

<?php
if($data == false){
    echo '<p> You have no tasks. </p>';
}else{
    print utility\htmlTable::genarateTableFromMultiArray($data);
}
?>
<div class ="card">
    <div class ="card-body">
<h3><a  href="index.php?page=tasks&action=create">Create Task</a></h3>
    </div></div>
<?php
include 'footer.php';
?>