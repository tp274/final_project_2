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
<h1><a type=button href="index.php?page=tasks&action=create">create task</a></h1>
    </div></div>
<?php
include 'footer.php';
?>