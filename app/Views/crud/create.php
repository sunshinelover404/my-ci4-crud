<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container-fluid " style="height:70px;background-color:orange">
<div class="row">
<div class="col-12 d-flex justify-content-center">
<button class="btn-create" onclick="myFunction()">Add New Record</button>
</div>
</div>
</div>



<div class="container bg-info" id="data-hide">
<div class="row">
<ul style="list-style-type:none;width:100%;  border:2px solid white;">
<?php

echo '<div class="container">
<h2>Basic Table</h2>
<table class="table">
  <thead>
    <tr>
      <th>Name</th>
      <th>Fname</th>
      <th>Age</th>
      <th>Depart</th>
      <th>Update</th>
      <th>Delete</th>
    </tr>
  </thead>
  <tbody>';

  foreach($record as $data){
   echo' <tr>';
     echo' <td>'.$data->name;'</td>';
      echo'<td>'.$data->fname;'</td>';
     echo' <td>'.$data->age;'</td>';
     echo' <td>'.$data->depart;'</td>';
     echo '<td>'.anchor('update/'.$data->id, 'Update');'</td>'; 
     echo '<td>'.anchor('delete/'.$data->id, 'Delete');'</td>'; 
 
    
   
   echo' </tr>';
  }
 echo'</tbody>
</table>
</div>';
?>
</ul> 
</div>
</div>
<ul>


<div class="container bg-success form-hide" id="form" >
  <h2 style="z-index:10;">Enter New Record</h2>

  <form action="<?php base_url()?>create" method="post">
    <div class="form-group">
      <label for="email">Name:</label>
      <input type="text" class="form-control" id="name" placeholder="Enter name" name="name">
    </div>
    <div class="form-group">
      <label for="pwd">FName:</label>
      <input type="text" class="form-control" id="fname" placeholder="Enter fname" name="fname">
    </div>
    <div class="form-group">
      <label for="pwd">Age:</label>
      <input type="number" class="form-control" id="age" placeholder="Enter age" name="age">
    </div>
    <div class="form-group">
      <label for="pwd">Depart:</label>
      <input type="text" class="form-control" id="depart" placeholder="Enter depart" name="depart">
    </div>
    <button type="submit" class="btn btn-default">Submit</button>
  </form>
</div>




<style>
li{
  display: inline-block;
  width:10%;

}

.btn-create
{
  float:right;
  background-color:crimson;
 height:70px;
 display:flex;
 align-items:center;
 padding: 2px;
}

.form-hide{
  display:none;
  position: absolute;
  top:10%;
}
.form-disp{
  display:block;
  position: absolute;
  top:10%;
  z-index: 10;
  
 
}


</style>


<script>

function myFunction() {
  var element = document.getElementById("form");
  element.classList.remove("form-hide");
  document.getElementById('data-hide').style.display='none';
  element.classList.add("form-show");
}


</script>

</body>
</html> 



