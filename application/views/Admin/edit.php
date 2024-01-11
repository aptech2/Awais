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

        <div class="row">
            <div class="col-md-8">
                <div class="row">
                    <div class="col-6">
                        <h3>Category Edit</h3>
                    </div>
                    <hr>
                    <div id="showmessage1" class="alert-success" alert-dismissible style="display:none;">Category Added sucessfully</div>
                   
                </div>
            </div>
        </div>

    </div>

       
            </div>

        

                    <!-- Corrected form action and added method attribute -->
                   <!-- Corrected form action and added method attribute -->
<!-- Corrected form action and added method attribute -->
<form action="<?php echo base_url('admin/editcategory/'.$users['id']);?>" method="post" id="createcategory" style="width: 300px; margin: auto; background-color: #f0f0f0; padding: 20px; border-radius: 8px;">
    <div id="showmessage" class="alert alert-success alert-dismissable" style="display:none; width: 100%;">Please Fill all Category</div>

    <div class="modal-body">
        <div class="form-group">
            <label for="name">Enter category name</label>
            <!-- Corrected input name attribute -->
            <input type="text" name="name" id="name" value="<?php echo set_value('name',$users['name']);?>" class="form-control" required>
            <p class="namError"></p>
        </div>
        <div class="form-group">
            <input type="submit" name="" class="btn btn-primary" value="update">
        </div>
    </div>
</form>


                </div>
            </div>
        

    
</body>
</html>
