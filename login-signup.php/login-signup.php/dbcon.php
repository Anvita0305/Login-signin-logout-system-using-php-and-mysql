<?php

$username="root";
$password="";
$server="localhost";
$db="signin";

$con=mysqli_connect($server,$username,$password,$db);

if($con)
{
    ?>
    <script>
    alert("Connection Successful");
    </script>
    <?php
}
else{
    ?>
    <script>
    alert("Connection Failed");
    </script>
    <?php
}

?>