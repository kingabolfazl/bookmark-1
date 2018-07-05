<?php
require('./connect.php');

    $db->query("INSERT INTO bookmark (name,url) VALUES ('".$_GET['newname']."','".$_GET['newurl']."')");
    echo "<div class='alert alert-success alert-dismissable' id='success-del'>
        <a class='close' data-dismiss='alert' aria-label='close'>&times;</a>
        <strong><i class='glyphicon glyphicon-floppy-saved'></i>  Eintrag gespeichert!</strong> <kbd class='bg-info text-success'> ".$_GET['newname']." </kbd> , <kbd class='bg-info text-success'>".$_GET['newurl']."</kbd>
    </div>";


?>
