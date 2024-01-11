<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <title>Register Form</title>
    <style>
        body {
            background-color: #f8f9fa;
        }
        .container {
            margin-top: 50px;
        }
    </style>
</head>
<body>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h2 class="text-center">Register</h2>
                </div>
                <div class="card-body">
                    <form action="" method="post" enctype="multipart/form-data" id="addregister">
                        <div class="form-group">
                            <label for="first_name">Firstname</label>
                            <input type="text" class="form-control" id="first_name" name="first_name">
                            <small><?php echo form_error('first_name');?></small>
                        </div>
                        <div class="form-group">
                            <label for="user_name">Username</label>
                            <input type="text" class="form-control" id="user_name" name="user_name">
                            <small><?php echo form_error('user_name');?></small>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" name="email">
                            <small><?php echo form_error('email');?></small>
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" id="password" name="password">
                            <small><?php echo form_error('password');?></small>
                        </div>
                        <div class="form-group">
                            <label for="confirm_password">Confirm Password</label>
                            <input type="password" class="form-control" id="confirm_password" name="confirm_password">
                            <small><?php echo form_error('confirm_password');?></small>
                        </div>
                        <!--
                        <div class="form-group">
                            <label for="profile_image">Profile picture</label>
                            <input type="file" class="form-control" id="profile_image" name="profile_image">
                        </div>
                        -->
                        <div class="form-group text-center">
                            <button type="submit" class="btn btn-primary">Register</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>



<script>
$('#addregister').submit(function(e) {
    e.preventDefault();

    $.ajax({
        url: "<?php echo base_url('admin/addRegister');?>",
        data: $('#addregister').serialize(),
        type: "POST",
        dataType: "json",
        success: function(response) {
            if (response.success) {
                // Handle success
                alert("Registration successful!");
                location.reload();
            } else {
                // Handle failure
                alert("Registration failed. Please try again.");
            }
        },
        error: function(xhr, textStatus, errorThrown) {
            console.log("Error: " + textStatus + " - " + errorThrown);
            alert("Error occurred during registration. Please try again.");
        }
    });
});
</script>

</body>
</html>
