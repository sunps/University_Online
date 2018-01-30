<?php
   $conn=mysqli_connect("localhost", "root", "", "project");
   if (!$conn){
  die('Could not connect: ' . mysqli_error());
  }
?>