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
        <div class="row">
            <div class="rec col-lg-7">
        <table class="table">
             <thead>
                <tr>
                    <th>Sno.</th>
                    <th>Name</th>
                    <th>Roll no.</th>
                    <th>Subject</th>
                    <th>Actions</th>
                </tr>
             </thead>
             <tbody id="record">
                
             </tbody>
        </table>
        </div>
        
        <div class="insert col-lg-5 ">
           <div class="card">
            <div class="card-header">
                <div class="card-body">
                    <label >Username</label>
                    <input type="text" name="name" id="name" class="form-control">
                    <label >Rollno</label>
                    <input type="text" name="rollno" id="rollno" class="form-control">
                    <label >Subject</label>
                    <input type="text" name="subjrect" id="subject" class="form-control">
                    <br>
                    <input type="submit" value="insert" id="insertStudent" class="btn btn-primary col-lg-12">
                </div>
            </div>
           </div>
        </div>
    </div>
    <script>
        $(document).ready(function(){
            $.ajax({
                url: 'Ajax.php',
                method: 'POST',
                data:'',
                success:function(data){
                    $('#record').html(data);
                }
            });
            $('#insertStudent').click(function(){
                var name = $('#name').val();
                var rollno= $('#rollno').val();
                var subject = $('#subject').val();
                $.ajax({
                    url: 'Ajax.php',
                method: 'POST',
                data:{
                    insertName: name,
                    insertrollno: rollno,
                    insertsubject: subject
                },
                success:function(data){
                    $('#record').html(data);
                }
                     
                });
            })
        })
    </script>
</body>
</html>