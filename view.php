<?php

include "dbConnect.php";

$my_query = 'SELECT * FROM students';
$result = mysqli_query($con, $my_query);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
    <title>student management system</title>
</head>
<body>
    
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark" >
        <a class="navbar-brand" href="#">SMS</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
           
            <li class="nav-item ">
              <a class="nav-link" href="index.php">Add </a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="view.php">View <span class="sr-only">(current)</span></a>
            </li>
            
          </ul>
         
        </div>
    </nav>

    <div class="p-5" style="width: 100%">

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

<h4>View Students</h4>

<hr>
    
<table border="1" class="table  col-md-8">
<thead>
<tr>
<th scope="col">S.No</th>
<th scope="col">Name</th>
<th scope="col">Contact</th>
<th scope="col">Address</th>
<th scope="col">Reg No</th>
<th scope="col">Department</th>
</tr>
</thead>
<tbody>

<?php

if($result && mysqli_num_rows($result) > 0)
{
    $serial = 1;
    while ($rows=mysqli_fetch_row($result)) {
        echo "<tr>";
        echo "<td>" . $serial . "</td>";
        echo "<td>" . $rows[1] . "</td>";
        echo "<td>" . $rows[2] . "</td>";
        echo "<td>" . $rows[3] . "</td>";
        echo "<td>" . $rows[4] . "</td>";
        echo "<td>" . $rows[5] . "</td>";
        echo "</tr>";
        $serial++;
    }
} else {
    echo "<tr><td colspan='6'>Sorry, no records found!</td></tr>";
}

?>

</tbody>
</table>

<script src="tsms.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
