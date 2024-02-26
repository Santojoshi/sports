<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Ela Admin - HTML5 Admin Template</title>
    <meta name="description" content="Ela Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="https://i.imgur.com/QRAUqs9.png">
    <link rel="shortcut icon" href="https://i.imgur.com/QRAUqs9.png">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.0/normalize.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pixeden-stroke-7-icon@1.2.3/pe-icon-7-stroke/dist/pe-icon-7-stroke.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.2.0/css/flag-icon.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>/assets/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>/assets/css/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->

</head>
<body>
<?php include_once 'sidebar.php' ?>

<div id="right-panel" class="right-panel">

    <!-- Header-->
    <header id="header" class="header">
        <div class="top-left">
            <div class="navbar-header">
                <a class="navbar-brand" href="./"><img src="images/logo.png" alt="Logo"></a>
                <a class="navbar-brand hidden" href="./"><img src="images/logo2.png" alt="Logo"></a>
                <a id="menuToggle" class="menutoggle"><i class="fa fa-bars"></i></a>
            </div>
        </div>
        <div class="top-right">
            <div class="header-menu">
                <div class="header-left">
                    <button class="search-trigger"><i class="fa fa-search"></i></button>
                    <div class="form-inline">
                        <form class="search-form">
                            <input class="form-control mr-sm-2" type="text" placeholder="Search ..."
                                aria-label="Search">
                            <button class="search-close" type="submit"><i class="fa fa-close"></i></button>
                        </form>
                    </div>

                    <div class="dropdown for-notification">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="notification"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-bell"></i>
                            <span class="count bg-danger">3</span>
                        </button>
                        <div class="dropdown-menu" aria-labelledby="notification">
                            <p class="red">You have 3 Notification</p>
                            <a class="dropdown-item media" href="#">
                                <i class="fa fa-check"></i>
                                <p>Server #1 overloaded.</p>
                            </a>
                            <a class="dropdown-item media" href="#">
                                <i class="fa fa-info"></i>
                                <p>Server #2 overloaded.</p>
                            </a>
                            <a class="dropdown-item media" href="#">
                                <i class="fa fa-warning"></i>
                                <p>Server #3 overloaded.</p>
                            </a>
                        </div>
                    </div>

                    <div class="dropdown for-message">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="message"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-envelope"></i>
                            <span class="count bg-primary">4</span>
                        </button>
                        <div class="dropdown-menu" aria-labelledby="message">
                            <p class="red">You have 4 Mails</p>
                            <a class="dropdown-item media" href="#">
                                <span class="photo media-left"><img alt="avatar" src="images/avatar/1.jpg"></span>
                                <div class="message media-body">
                                    <span class="name float-left">Jonathan Smith</span>
                                    <span class="time float-right">Just now</span>
                                    <p>Hello, this is an example msg</p>
                                </div>
                            </a>
                            <a class="dropdown-item media" href="#">
                                <span class="photo media-left"><img alt="avatar" src="images/avatar/2.jpg"></span>
                                <div class="message media-body">
                                    <span class="name float-left">Jack Sanders</span>
                                    <span class="time float-right">5 minutes ago</span>
                                    <p>Lorem ipsum dolor sit amet, consectetur</p>
                                </div>
                            </a>
                            <a class="dropdown-item media" href="#">
                                <span class="photo media-left"><img alt="avatar" src="images/avatar/3.jpg"></span>
                                <div class="message media-body">
                                    <span class="name float-left">Cheryl Wheeler</span>
                                    <span class="time float-right">10 minutes ago</span>
                                    <p>Hello, this is an example msg</p>
                                </div>
                            </a>
                            <a class="dropdown-item media" href="#">
                                <span class="photo media-left"><img alt="avatar" src="images/avatar/4.jpg"></span>
                                <div class="message media-body">
                                    <span class="name float-left">Rachel Santos</span>
                                    <span class="time float-right">15 minutes ago</span>
                                    <p>Lorem ipsum dolor sit amet, consectetur</p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="user-area dropdown float-right">
                    <a href="#" class="dropdown-toggle active" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false">
                        <img class="user-avatar rounded-circle" src="images/admin.jpg" alt="User Avatar">
                    </a>

                    <div class="user-menu dropdown-menu">
                        <a class="nav-link" href="#"><i class="fa fa-user"></i>My Profile</a>

                        <a class="nav-link" href="#"><i class="fa fa-bell-o"></i>Notifications <span
                                class="count">13</span></a>

                        <a class="nav-link" href="#"><i class="fa fa-cog"></i>Settings</a>

                        <a class="nav-link" href="#"><i class="fa fa-power-off"></i>Logout</a>
                    </div>
                </div>
            </div>
        </div>
    </header><!-- /header -->
    <!-- Header-->

    <div class="breadcrumbs">
        <div class="breadcrumbs-inner">
            <div class="row m-0">
                <div class="col-sm-4">
                    <div class="page-header float-left">
                        <div class="page-title">
                            <h1>Dashboard</h1>
                        </div>
                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="page-header float-right">
                        <div class="page-title">
                            <ol class="breadcrumb text-right">
                                <li><a href="#">Dashboard</a></li>
                                <li><a href="#">Product</a></li>
                                <li class="active">Add Product</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="content">
        <div class="animated fadeIn">


            <div class="row">
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header">
                         Add New Category
                        </div>
                        <div class="card-body">
                            <!-- Credit Card -->
                            <div id="pay-invoice">
                                <div class="card-body">
                                <?php if (isset($cat_success)) {
                                    echo '<script>alert("' . $cat_success . '");</script>';
                                } ?>
                                    <form action="<?= site_url('add_category')?>" method="post" enctype="multipart/form-data">

                                        <div class="form-group has-success row">
                                            <div class="col-md-10">
                                                <input id="category" name="category" type="text" class="form-control"
                                                    placeholder="Enter Category">
                                            </div>
                                            <div class="col-md-2">
                                                <button type="submit" class="btn btn-success">Add</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            Add New Sub Category
                        </div>
                        <div class="card-body">
                            <!-- Credit Card -->
                            <div id="pay-invoice">
                                <div class="card-body">
                                <?php if (isset($sub_cat_success)) {
                                     echo '<script>alert("' . $sub_cat_success . '");</script>';
                                } ?>
                                    <form action="<?= site_url('add_sub_category')?>" method="post" enctype="multipart/form-data">

                                        <div class="form-group has-success row">
                                            <div class="col-md-10">
                                                <input id="sub_category" name="sub_category" type="text" class="form-control"
                                                    placeholder="Enter Sub Category">
                                            </div>
                                            <div class="col-md-2">
                                                <button type="submit" class="btn btn-success">Add</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>

            <hr>
            <div class="row">
                <!-- jjkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkk -->

                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                             Add New Product
                        </div>
                        <p><?php if(! empty($valid_error) ) {?>
                            <div class="alert alert-danger" role="alert">
                                <?= $valid_error->listErrors(); ?>
                            </div>
                        <?php } ?>
                        <div class="card-body card-block">
                            <form action="<?= site_url('upload_product')?>" method="post" class="" enctype="multipart/form-data">
                                <label for=""><i class="fa fa-rocket"></i> Enter Product Name</label>
                                <input type="text" class="form-control" name="product_name" value="<?= set_value('product_name') ?>">
                                <br>
                                <label for=""><i class="fa fa-rocket"></i> Select Category</label>
                                <select name="category" id="" class="form-control" value="<?= set_value('category') ?>">
                                <?php if (isset($category)) {
                                 foreach($category as $data) { ?>
                                    <option value="<?= $data['id']?>"><?= $data['category_name'] ?></option>
                                    <?php  }}?>
                                </select>
                                <br>
                                <label for=""><i class="fa fa-rocket"></i> Select Sub-Category</label>
                                <select name="sub_category" id="" class="form-control" value="<?= set_value('sub_category') ?>">
                                <?php if (isset($sub_category)) {
                                
                                 foreach($sub_category as $data) { ?>
                                    <option value="<?= $data['id']?>"><?= $data['sub_category_name'] ?></option>
                                    <?php  }}?>
                                </select>                    
                                <br>
                                <label for=""><i class="fa fa-rocket"></i> Is Featured?</label><br>
                                <input type="radio" name="is_feature" id="" value='1'>
                                <label for="">Yes</label>
                                <input type="radio" name="is_feature" id="" value='2'>
                                <label for="">No</label>
                                <br>
                                <br>
                                <label for=""><i class="fa fa-rocket"></i> Enter Product Price</label>
                                <input type="text" class="form-control" name="price" value="<?= set_value('price') ?>">
                                <br>
                                <label for=""><i class="fa fa-rocket"></i> Product Description</label>
                                <textarea name="product_desc" id="" cols="100" rows="6" value="<?= set_value('product_desc') ?>"></textarea>
                                <br>
                                <br>
                                <label for=""><i class="fa fa-rocket"></i> Product Image</label>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="custom-file mt-5">
                                            <input type="file" class="custom-file-input" name="main_image" id="inputGroupFile01" onchange="displayImage()">
                                            <label class="custom-file-label" for="inputGroupFile01">Choose Main Image</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="text-center">
                                            <img id="previewImage" class="previewImage" src="" alt="">
                                        </div>
                                    </div>
                                    
                                    <div class="col-md-3">
                                        <div class="custom-file mt-5">
                                            <input type="file" class="custom-file-input" name="sub_image1" id="inputFile1" onchange="displayImages('inputFile1', 'previewImage1')">
                                            <label class="custom-file-label" for="inputFile1">Sub Image1</label>
                                            <div class="sub-image mb-2 mt-3">
                                                <img id="previewImage1" class="previewImage" src="" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="custom-file mt-5">
                                            <input type="file" class="custom-file-input" name="sub_image2" id="inputFile2" onchange="displayImages('inputFile2', 'previewImage2')">
                                            <label class="custom-file-label" for="inputFile2">Sub Image2</label>
                                            <div class="sub-image mb-2 mt-3">
                                                <img id="previewImage2" class="previewImage" src="" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="custom-file mt-5">
                                            <input type="file" class="custom-file-input" name="sub_image3" id="inputFile3" onchange="displayImages('inputFile3', 'previewImage3')">
                                            <label class="custom-file-label" for="inputFile3">Sub Image3</label>
                                            <div class="sub-image mb-2 mt-3">
                                                <img id="previewImage3"  class="previewImage" src="" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="custom-file mt-5">
                                            <input type="file" class="custom-file-input" name="sub_image4" id="inputFile4" onchange="displayImages('inputFile4', 'previewImage4')">
                                            <label class="custom-file-label" for="inputFile4">Sub Image4</label>
                                            <div class="sub-image mb-2 mt-3">
                                                <img id="previewImage4" class="previewImage" src="" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                                <br>
                                <br>
                                <center><button type="submit" class="btn btn-success">Add Product</button></center>

                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>


        </div><!-- .animated -->
        <div class="clearfix"></div>
        
        <?php include_once 'footer.php' ?>
    </div><!-- .content -->
    
    
<script src="https://cdn.jsdelivr.net/npm/jquery@2.2.4/dist/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.4/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-match-height@0.7.2/dist/jquery.matchHeight.min.js"></script>
<script src="<?php echo base_url() ?>/assets/js/main.js"></script>
    
    <script>
        function displayImage() {
            var input = document.getElementById('inputGroupFile01');
            var img = document.getElementById('previewImage');
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                
                reader.onload = function (e) {
                    img.src = e.target.result;
                };
                
                reader.readAsDataURL(input.files[0]);
            }
        }
        function displayImages(inputId, imgId) {
            var input = document.getElementById(inputId);
            var img = document.getElementById(imgId);
    
            if (input.files && input.files[0]) {
                var reader = new FileReader();
    
                reader.onload = function (e) {
                    img.src = e.target.result;
                };
    
                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>