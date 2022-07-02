<!DOCTYPE html>
<html lang="en">
<head>
  <title>Update Record</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>



<div class="container bg-success form-hide" id="form" >
  <h2 style="z-index:10;">Update Record</h2>

  <form action="<?php base_url()?>update" method="post">
    <div class="form-group">
      <label for="email">Name:</label>
      <input type="text" class="form-control" id="name" placeholder="Enter name" name="name" value='<?php echo $name;?>'>
    </div>
    <div class="form-group">
      <label for="pwd">FName:</label>
      <input type="text" class="form-control" id="fname" placeholder="Enter fname" name="fname" value='<?php echo $fname;?>'>
    </div>
    <div class="form-group">
      <label for="pwd">Age:</label>
      <input type="number" class="form-control" id="age" placeholder="Enter age" name="age" value='<?php echo $age;?>'>
    </div>
    <div class="form-group">
      <label for="pwd">Depart:</label>
      <input type="text" class="form-control" id="depart" placeholder="Enter depart" name="depart" value='<?php echo $depart;?>'>
    </div>
    <input type="hidden" name="id" id="id" value='<?php echo $id;?>'>
    <button type="submit" class="btn btn-default">Update</button>
  </form>
</div>







</body>
</html> 



