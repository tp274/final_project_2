<?php
include 'header.php';
//this is how you print something

if($data == false){
    echo '<p> You have no tasks </p>';
}else{
    print utility\htmlTable::genarateTableFromMultiArray($data);
}

?>
<h1><a type=button href="index.php?page=tasks&action=create">create task</a></h1>
