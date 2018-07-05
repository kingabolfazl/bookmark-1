
<!doctype html>
<html lang="de">
<head>
  <meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <title>bookmark</title>
  <style>
    /* Add a gray background color and some padding to the footer */
    footer {
      background-color: #f2f2f2;
      padding: 25px;
    }
  </style>
  <?php require ("./page.php");?>
</head>
<body style="background-color:#222222;">
<header>
  <?php include("./navbar.php"); ?>
  <div class="jumbotron">
    <div class="container text-left">
    <h1>bookmark</h1>
      <p>readmarkable...</p>
    </div>
  </div>
  <!--_MAINCONTAINER_________________________________________________________-->
  <div class="container">
  <div class="container row">
  <!--_CONTAINER_____________________________________________________________-->
  <div class="col-sm-4">
    <img class="img-thumbnail" src="img/sadcat1.jpg" alt="sadcat">
  </div>
  <!--_CONTAINER_____________________________________________________________-->
  <div class="col-sm-8 well">
    <p><?php include("./txt/loremipsum.txt");?></p>
  </div>
</div>
</div>
</body>
</html>
