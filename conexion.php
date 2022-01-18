<?php


session_start();

$conn = mysqli_connect(
  'localhost',
  'root',
  '',
  'benjamin'
);

//or die(mysqli_erro($mysqli));
if(mysqli_connect_errno())
{
    echo "error grave";
    exit();

}


?>