<?php
 $conn = mysqli_connect('localhost','root','','student');
 $id=$_GET['id'];
 $query = "DELETE FROM students WHERE id='$id'";
 $result = mysqli_query($conn,$query);
 ?>
 <script>
     window.location='index.php'; 
 </script>