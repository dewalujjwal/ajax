<?php
   $conn = mysqli_connect('localhost','root','','student');
   $query = "select * from students";

   $result =mysqli_query($conn,$query);
   $sno=1;
   while($rec=mysqli_fetch_assoc($result)){
?>
<tr>
   <td><?=$sno++?></td>
   <td><?=$rec['name']?></td>
   <td><?=$rec['rollno']?></td>
   <td><?=$rec['subject']?></td>
   <td>
      <a href="edit.php?id=<?=$rec['id']?>"class="btn btn-warning">Update</a>
      <a href="delete.php?id=<?=$rec['id']?>" class="btn btn-danger">Delete</a>
   </td>

</tr>

<?php
}
if(isset($_POST['insertName'])){
  
   $name=$_POST['insertName'];
   $rollno=$_POST['insertrollno'];
   $subject=$_POST['insertsubject'];
  echo $name;
   $query="insert into students (name,rollno,subject) values('$name','$rollno','$subject')";
   mysqli_query($conn,$query);
}
if(isset($_POST['updateName'])){
   $id=$_POST['id']; 
   $name=$_POST['updateName'];
   $rollno=$_POST['updateRollno'];
   $subject=$_POST['updatesubject'];
  
   $query="update students set name='$name',rollno='$rollno',subject='$subject' where id='$id'" ;
   mysqli_query($conn,$query);
}
?>