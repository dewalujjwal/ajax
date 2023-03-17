<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ajax</title>
    <script src="jquery.js"></script>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
    <h1>Crud with php Ajax</h1>
        <br>

<?php
 $conn = mysqli_connect('localhost','root','','student');
 $id=$_GET['id'];
 $query = "select * from students where id=$id";
 $result = mysqli_query($conn,$query);
 if($rec=mysqli_fetch_assoc($result)){
    ?>

<div class="card">
            <div class="card-header">Update Sztudent</div>
                <div class="card-body">
                    <label >Username</label>
                    <input type="hidden" name="id" id="id" value="<?=$rec['id']?>">p
                    <input type="text" name="name" id="name" value="<?=$rec['name']?>" class="form-control">
                    <label >Rollno</label>
                    <input type="text" name="rollno" id="rollno" value="<?=$rec['rollno']?>" class="form-control">
                    <label >Subject</label>
                    <input type="text" name="subject" id="subject" value="<?=$rec['subject']?>"class="form-control">
                    <br>
                    <input type="submit" value="update" id="updateStudent" class="btn btn-primary col-lg-12">
                </div>
            </div>
           

    <?php
 }
 ?>
 </div>
 <script>
    $(document).ready(function(){
        $('#updateStudent').click(function(){
            $.ajax({
                url:'Ajax.php',
                method: 'POST',
                data: {
                    id: $('#id').val(),
                    updateName : $('#name').val(),
                    updateRollno : $('#rollno').val(),
                    updatesubject  : $('#subject').val()
                },
                success:function(data){
                      window.location='index.php'; 
                }

            });
        })
    })
 </script>
</body>
</html>
