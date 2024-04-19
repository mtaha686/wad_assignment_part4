<?php


include_once "dbConnect.php";
$sqli = 'SELECT * FROM departments';
$department_list = mysqli_query($con,$sqli);


$editID = $name = $contact = $address = $registration = $department= "";




if ($_SERVER["REQUEST_METHOD"] == "POST") {

  $editID = $_POST["editID"];
  $name = $_POST["name"];
  $contact = $_POST["contact"];
  $address = $_POST["address"];
  $registration=$_POST["registration"];
  $department=$_POST["department"];

}else{
  $editID = NULL;
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
    <title>Student management system</title>
</head>
<body>

    
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark" >
        <a class="navbar-brand" href="#">SMS</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
           
            <li class="nav-item active">
              <a class="nav-link" href="index.php">Add <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="view.php">View</a>
            </li>
            
          </ul>
         
        </div>
      </nav>

      


      <div class="p-5" style="width: 90%">
<?php

if($_GET){
  $message = $_GET['message']; // print_r($_GET); //remember to add semicolon      
}else{

}

if(isset($message) && $message == "Success"){
      echo "<h6 style='color: green;'>Success!</h6>";
}
else if(isset($message) && $message == "Unsuccess"){
  echo "<h6 style='color: red;'>Error!</h6>";
}

?>


<?php

if(isset($editID) && $editID != ""){
  echo "<h4>Edit Student</h4>";
}
else{
  echo "<h4>Add Student</h4>";
}

?>

    


    <hr>
    <br>
    <!-- <?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?> -->
    <form method="post" action="addStudent.php">
    
<input type="hidden" name="editID" value="<?php echo $editID; ?>" />

  <div class="form-row">
    <div class="form-group col-md-3">
      <label for="inputName">Name </label> <label id="errorInvalidName" style="visibility: hidden;"></label>
      <input type="text" class="form-control" value="<?php echo $name ?? ""; ?>" name="name" id="inputName" placeholder="Name" required>
    </div>
    
    <div class="form-group col-md-3">
      <label for="inputContact">Contact </label> <label id="errorInvalidContact" style="visibility: hidden;"></label>
      <input type="text" class="form-control" value="<?php echo $contact ?? ""; ?>" name="contact" id="inputContact" placeholder="Contact" required>
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
    <label for="inputAddress">Address</label>
    <input type="text" class="form-control" value="<?php echo $address ?? ""; ?>" name="address" id="inputAddress" placeholder="96, B-type QAU" required>
</div>  
</div>
  
  <div class="form-row">
    
    <div class="form-group col-md-4">
        <label for="inputRegNo">Reg No. </label> <label id="errorInvalidRegNo" style="visibility: hidden;"></label>
        <input type="text" class="form-control" value="<?php echo $registration ?? ""; ?>" id="inputRegNo" name="registration"  placeholder="04071813015" required>
      </div>

      <!-- Start Main Assignment work -->
      <div class="form-group col-md-2">
    <label for="inputDepartment">Department</label>
    <select id="inputDepartment" class="form-control" name="department">
        <?php
        // Static array of department names
        $departments = array("Chemistry", "Computer Science", "Physics", "Biology", "Mathematics", "History", "Psychology", "English", "Economics", "Sociology");

        // Loop through the department names array
        foreach ($departments as $department) {
            echo "<option value='" . $department . "'>" . $department . "</option>";
        }
        ?>
    </select>
    <!-- complete here Assignment main task -->
</div>

    
  </div>
  <br>
  

  <?php

if(isset($editID) && $editID != ""){
  echo '<button type="submit" class="btn btn-success col-md-0">Update Student</button>';
}
else{
  echo '<button type="submit" class="btn btn-primary col-md-0">Add Student</button>';
}

?>

  

</form>
</div>
    




<?php




?>


<script src="tsms.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>