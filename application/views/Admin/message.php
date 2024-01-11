<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
    <title>Hello, world!</title>
  </head>
  <body>
    <h1>Hello, world!</h1>



    <div class="container mt-5">
    <h2>Bootstrap Table Example</h2>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>CarName</th>
                <th>price</th>
                <th>model</th>
                <th>model</th>
                <th>status</th>

                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>John Doe</td>
                <td>Jane Smith</td>
                <td>john@example.com</td>
               // <td><input type="checkbox" <?php echo $use['status'] == 1 ? 'checked' : ''; ?> name="status" id=""></td>

                <td>
                    <button class="btn btn-primary btn-sm">Edit</button>
                    <button class="btn btn-danger btn-sm">Delete</button>
                </td>
            </tr>
          
            <!-- Add more rows as needed -->
        </tbody>
    </table>
</div>


    <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Launch demo modal
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form action="" method="post" id="createcategory">
    <div id="showmessage" class="alert alert-success alert-dismissable" style="display:none;">Please Fill all Category</div>

    <div class="modal-body">
        <div class="form-group">
            <label for="course_name">Enter Car name</label>
            <input type="text" name="course_name" id="course_name" class="form-control" >
            <p class="namError"></p>
        </div>
        <div class="form-group">
            <label for="duration">Model</label>
            <input type="text" name="duration" id="duration" class="form-control" >
            <p class="namError"></p>
        </div>
        <div class="form-group">
            <label for="course_fees">Price</label>
            <input type="text" name="course_fees" id="course_fees" class="form-control" >
            <p class="namError"></p>
        </div>
            </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>


          



<script>
$('#createcategory').submit(function(e){

e.preventDefault();

$.ajax({
    url:'<?php base_url('course/car');?>',
    data:$("#createcategory").serialize(),
    type="post",
    async:false,
    


});







});


    </script>


  </body>
</html>