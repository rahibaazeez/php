<?php
include "connection2.php";
$sql=mysqli_query($conn,"select * from student_reg;");

?>





<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <style>
    .parent{
      display:inline-block;
    }
    .new{
      margin-left: 10px;
      margin-top: 10px;
    }
  </style>
  
  </head>
  <body>
   
    <?php
    while($row=mysqli_fetch_assoc($sql)){
    ?>
    
   
    <div class="parent">
    <div class="new card" style="width: 18rem;">
        <img src="./image/<?php echo $row['photo'];?>" alt="image not found" height="130px"  width="50px" class="card-img-top" >
        <div class="card-body">
          <strong>Name:</strong>
          <?php echo $row['name'];?><br>
          <strong>Email:</strong>
          <?php echo $row['email'];?><br>
          <strong>Phonenumber:</strong>
          <?php echo $row['phone'];?>
          <a href="reg_edit.php?id=<?php echo $row['id'];?>" class="btn btn-primary">Edit</a>
          
        </div>
      </div>
    </div>
    
    <?php
    }
    ?>
    

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>
