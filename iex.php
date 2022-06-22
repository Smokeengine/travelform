<?php

if(isset($_POST['name'])){
  $server = "localhost";
    $username = "root";
    $password = "";
    $database_name="gtrip";

    $con = mysqli_connect($server, $username, $password ,$database_name);
    
    if(!$con){
        die("connection to the database failed due to" . mysqli_connect_error());
    }

    
    
    
    
    $name= $_POST['name'];
    $rollnumber= $_POST['rollnumber'];
    $phnno= $_POST['phnno'];
    $s= $_POST['s'];
    $q= $_POST['q'];
    $txtarea= $_POST['txtarea'];

    $x = strlen($phnno);
    
    $sql = "INSERT INTO `trip` ( `name`, `rollnumber`, `phnno`, `gender`, `transport`, `txtarea`, `date`) VALUES ( '$name', '$rollnumber', '$phnno', '$s', '$q', '$txtarea', current_timestamp())";
    
    if($name !="" || $rollnumber!="" ||  $x==10 || $s!="" || $q!="" || $txtarea!="" )
    {
    if($con->query($sql) == true)
    {
        echo "<h1 class='r'>Thanks for submitting the form.<br>Hope we enjoy the trip... </h1>";
    }
    }
    else{
        echo "error: $sql <br> $con->error";
        echo "phone number must contain 10 digits";

    }


   
    $con->close();

}
?>


