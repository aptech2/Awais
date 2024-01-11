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
<!--  ACTIVE NOT WORK -->
        <div class="row">
            <div class="col-md-12">
                <?php if ($this->session->flashdata('danger')): ?>
                    <div class="alert alert-success" role="alert" >
                        <?php echo $this->session->flashdata ('danger'); ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>
        <!-- deactive alert  -->

        <div class="row">
            <div class="col-md-12">
                <?php if ($this->session->flashdata('sucess')): ?>
                    <div class="alert alert-success" role="alert" >
                        <?php echo $this->session->flashdata ('sucess'); ?>
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
                        <h3>Course (<?php echo sizeof($courses); ?>)</h3>
                    </div>
                    <hr>
                    <div id="showme1" class="alert-success" alert-dismissible style="display:none;">Course Added sucessfully</div>
                    <div class="col-md-6" text-right>
                        <!-- Corrected function name from 'showmodel' to 'showModel' -->
                        <a href="javascript:void(0)" onclick="showModel();" class="btn btn-warning">ADD Course</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            
                    <div class="row">
            <div class="col-md-8">
            <div class="container mt-5">
        <h2 style="margin-left: 150px;">Beautiful Bootstrap 5 Table</h2>
        <table class="table table-bordered table-striped"  id="mytable">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Course Name</th>
                    <th>Duration</th>
                    <th>Course fees</th>
                    <th>Course started</th>
                    <th>Status</th>
                    <th>Delete</th>
                    <th>Edit</th>

                </tr>
            </thead>
            <tbody>
                <?php if(!empty($courses)){foreach($courses as $use) {?>
                <tr>
                    <td><?php echo $use['id']?></td>
                    <td><?php echo $use['coure_name']?></td>
                    <td><?php echo $use['duration']?></td>
                    <td><?php echo $use['course_fees']?></td>
                    <td><?php echo $use['course_started']?></td>

                    <td> <?php if($use['status']==1){?>
                        <a class="btn btn-info"  href="<?php echo base_url('admin/status_course/'.$use['id']);?>" >Active</a>
                        <?php }
                        else{?>
                 <a class="btn btn-danger"  href="<?php echo base_url('admin/destatus_course/'.$use['id']);?>" >Deactive</a>
                 <?php }?>
                    <td><a href="<?php echo base_url('admin/deletecourse/'.$use['id']);?>" class="btn btn-danger"><i class="fas fa-trash-alt" ></i></a></td>
                    <td><a href="<?php echo base_url('admin/editcourse/'.$use['id']);?>" class="btn btn-success"><i class="fas fa-pencil-alt" ></i></a></td>

                </tr>
              <?php }}?>
            </tbody>
        </table>
                    </table>

                    <script>
                        // Initialize DataTable
                        $(document).ready(function () {
                            $('#mytable').DataTable();
                        });
                    </script>
                </div>
            </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="createcar" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">ADD Course</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    <!-- Corrected form action and added method attribute -->
                    <form action="" method="post" id="createcategory">
    <div id="showmessage" class="alert alert-success alert-dismissable" style="display:none;">Please Fill all Course</div>

    <div class="modal-body">
        <div class="form-group">
            <label for="course_name">Enter Course name</label>
            <input type="text" name="course_name" id="course_name" class="form-control" >
            <p class="namError"></p>
        </div>
        <div class="form-group">
            <label for="duration">Duration</label>
            <input type="text" name="duration" id="duration" class="form-control" >
            <p class="namError"></p>
        </div>
        <div class="form-group">
            <label for="course_fees">Course Fees</label>
            <input type="text" name="course_fees" id="course_fees" class="form-control" >
            <p class="namError"></p>
        </div>
        <div class="form-group">
            <label for="course_started">Course Started</label>
            <input type="date" name="course_started" id="course_started" class="form-control" >
            <p class="namError"></p>
        </div>
        <div class="form-group">
            <input type="submit" name="" class="btn btn-primary" value="Add">
        </div>
    </div>
</form>

                </div>
            </div>
        </div>
    </div>

    <script>
        // Corrected function name from 'showmodel' to 'showModel'
        function showModel() {
            $('#createcar').modal("show");
        }




$('#createcategory').submit(function(e){
    e.preventDefault();

    $.ajax({
        url: "<?php echo base_url('admin/addcourse');?>",
        data: $('#createcategory').serialize(),
        type: "POST",
        dataType: "json",
        success: function(response){
            console.log(response); // Log the response to the console

            if (response) {
                $('#createcar').modal("hide");
                $('#showme1').show();
                setInterval(function(){
                    location.reload();
                }, 3000);
            } else {
                $('#showmessage').show();
                setInterval(function(){
                    location.reload();
                }, 3000);
            }
        },
        error: function(xhr, status, error) {
            console.error(xhr.responseText); // Log the error response to the console
        }
    });
});










    </script>
</body>
</html>
