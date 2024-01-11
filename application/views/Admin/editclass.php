<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
  
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
        crossorigin="anonymous">
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
        integrity="sha384-hVEhvslRg5PH3t25lFPJGK5qjcUKsIBZ3eEAH5e4z5T68tiEpGtR6NhIbezddKtr"
        crossorigin="anonymous">
</head>

<body>
    <!-- Navbar -->
    <div class="navbar navbar-dark bg-dark">
        <div class="container" style="padding-top: 10px;">
            <a href="#" class="navbar-brand">VIEW</a>
        </div>
    </div>

    <!-- Main Content -->
    <div class="container">
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
                        <h3>Class</h3>
                    </div>
                    <hr>
                    <div id="showme1" class="alert-success" alert-dismissible style="display:none;">Class Edit successfully</div>
                </div>
            </div>
        </div>

        <!-- Corrected form action and added method attribute -->
        <form action="<?php echo base_url('admin/editclass/' . $userclass['id']);?>" method="post" id="createcategory"
            style="width: 300px; margin: auto;">
       

            <div class="modal-body">
                <div class="mb-3">
                    <label for="name" class="form-label">Class Name</label>
                    <input type="text" name="class_name" id="name" value="<?php echo set_value('class_name', $userclass['class_name']);?>" class="form-control"
                        required>
                    <p class="namError"></p>
                </div>

                <div class="mb-3">
                    <label for="category" class="form-label">Select Category</label>
                    <select name="cat" class="form-select" id="category">
                        <option value=""><?php echo set_value('cat',$userclass['cat_name']); ?></option>
                        <?php foreach ($cats as $cat):{ ?>
                            <option >
                                <?php echo $cat['name']; ?>
                            </option><?php }?>
                        <?php endforeach; ?>
                    </select>
                </div>

                <div class="mb-3">
                    <input type="submit" name="" class="btn btn-primary" value="Update">
                </div>
            </div>
        </form>
    </div>

    <!-- Bootstrap JS Bundle (including Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</body>

</html>
