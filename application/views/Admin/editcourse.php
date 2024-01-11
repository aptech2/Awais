<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha384-hVEhvslRg5PH3t25lFPJGK5qjcUKsIBZ3eEAH5e4z5T68tiEpGtR6NhIbezddKtr" crossorigin="anonymous">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Bootstrap JS Bundle (including Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

    <!-- DataTables CSS -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.10/css/dataTables.bootstrap5.min.css">

    <!-- DataTables JS -->
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.10/js/jquery.dataTables.js"></script>

    <!-- DataTables Bootstrap JS -->
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.10/js/dataTables.bootstrap5.min.js"></script>
</head>
<body>
    <!-- Navbar -->
    <div class="navbar navbar-dark bg-dark">
        <div class="container" style="padding-top: 10px; margin-left: 400px;">
            <a href="#" class="navbar-brand">VIEW</a>
        </div>
    </div>

    <!-- Main Content -->
    <div class="container" style="margin-left: 400px;">


    <div class="row">
            <div class="col-md-12">
                <?php if ($this->session->flashdata('error')): ?>
                    <div class="alert alert-danger" role="alert">
                        <?php echo $this->session->flashdata ('error'); ?>
                    </div>
                <?php endif; ?>
            </div>
        </div> 
        <!-- Active     status -->
        <div class="row">
            <div class="col-md-12">
                <?php if ($this->session->flashdata('success')): ?>
                    <div class="alert alert-success" role="alert" >
                        <?php echo $this->session->flashdata ('success'); ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>
       <div class="row">
            <div class="col-md-12">
                <?php if ($this->session->flashdata('error')): ?>
                    <div class="alert alert-danger" role="alert">
                        <?php echo $this->session->flashdata ('error'); ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>

        <div class="row">
            <div class="col-md-8">
                <div class="row">
                    <div class="col-6">
                        <h3>Course Edit</h3>
                    </div>
                    <hr>
                    <div id="showme1" class="alert-success" alert-dismissible style="display:none;">Course Edit sucessfully</div>
         



                    <!-- Corrected form action and added method attribute -->
                    <form action="" method="post" id="createcategory">
    <div id="showmessage" class="alert alert-success alert-dismissable" style="display:none;">Please Fill all Course</div>

    <div class="modal-body">
    <form action="<?php echo base_url('admin/editcourse/'. $editcourse['id']);?>" method="post" id="createcategory"
            style="width: 300px; margin: auto;">
        <div class="form-group">
            <label for="course_name">Enter course name</label>
            <input type="text" name="course_name" id="course_name" class="form-control"  value="<?php echo set_value('course_name', $editcourse['coure_name']);?>">
            <p class="namError"></p>
        </div>
        <div class="form-group">
            <label for="duration">Duration</label>
            <input type="text" name="duration" id="duration" class="form-control" value="<?php echo set_value('duration', $editcourse['duration']);?>">
            <p class="namError"></p>
        </div>
        <div class="form-group">
            <label for="course_fees">Course Fees</label>
            <input type="text" name="course_fees" id="course_fees" class="form-control" value="<?php echo set_value('course_fees', $editcourse['course_fees']);?>" >
            <p class="namError"></p>
        </div>
        <div class="form-group">
            <label for="course_started">Course Started</label>
            <input type="date" name="course_started" id="course_started" class="form-control" value="<?php echo set_value('course_started', $editcourse['course_started']);?>" >
            <p class="namError"></p>
        </div>
        <div class="form-group">
            <input type="submit" name="" class="btn btn-primary" value="Edit">
        </div>
    </div>
</form>

                </div>
            </div>
        </div>
    </div>



</body>
</html>
