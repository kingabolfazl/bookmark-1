<?php
require('./connect.php');
if(empty($_GET['editname']) && !empty($_GET['url']) && !empty($_GET['name'])){
  if (!empty($_GET['search'])) {
      $editabrr = "admin.php?search=".$_GET['search']."";}
      else{
      $editabrr = "admin.php";}
  echo "
    <div class='container col-sm-12 alert alert-info'>
      <form  action='".$editabrr."' method='get'>
      <input class='collapse' type='text' name='id' value='".$_GET['id']."'>
      <div class='col-sm-5'>
        <input class='form-control' name='editname' type='text' placeholder='Name' value='".$_GET['name']."' required>
      </div>
      <div class='col-sm-5'>
        <input class='form-control' name='editurl' type='url' placeholder='url' value='".$_GET['url']."' required>
      </div>
      <div class='pull-right col-sm-2'>
        <button class='btn bg-info' type='submit'><i class='text-success glyphicon glyphicon-floppy-save'></i></button>
        <a href='".$editabrr."' class='btn bg-info'><i class='text-danger glyphicon glyphicon-remove'></i></a>
      </div>
      </form>
    </div><br>";}
  ?>
