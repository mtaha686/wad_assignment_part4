<?php
$con = new mysqli("localhost", "root", "", "projectDB",3306);

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connection failed: %s\n", mysqli_connect_error());
    exit();
}


// $my_query = 'SELECT * FROM students';
// $result = mysqli_query($con, $my_query);
?>
