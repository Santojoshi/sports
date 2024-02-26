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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="<?= base_url()  ?>/assets/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="<?= base_url()  ?>/assets/css/lib/datatable/dataTables.bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url()  ?>/assets/css/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->

</head>
<body>
    <!-- Left Panel -->

    <?php include_once 'sidebar.php' ?>
    <!-- Left Panel -->

    <!-- Right Panel -->

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
                                <input class="form-control mr-sm-2" type="text" placeholder="Search ..." aria-label="Search">
                                <button class="search-close" type="submit"><i class="fa fa-close"></i></button>
                            </form>
                        </div>

                        <div class="dropdown for-notification">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="notification" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="message" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
                        <a href="#" class="dropdown-toggle active" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="user-avatar rounded-circle" src="images/admin.jpg" alt="User Avatar">
                        </a>

                        <div class="user-menu dropdown-menu">
                            <a class="nav-link" href="#"><i class="fa fa-user"></i>My Profile</a>

                            <a class="nav-link" href="#"><i class="fa fa-bell-o"></i>Notifications <span class="count">13</span></a>

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
                                <h1>PRODUCT</h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="page-header float-right">
                            <div class="page-title">
                                <ol class="breadcrumb text-right">
                                    <li><a href="#">Dashboard</a></li>
                                    <li><a href="#">Table</a></li>
                                    <li class="active">Data table</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      
        <div class="content">
            <?php if(isset($del_msg) && !empty($del_msg)){?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
  <center><strong><?php echo $del_msg ?></strong></center> 
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
  <?php } ?>
</div>

            <div class="animated fadeIn">
                <div class="row">

                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Category List</strong>
                            </div>
                            <div class="card-body">
                                <table id="category-table" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Edit</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach($category as $data){ ?>
                                        <tr>
                                            <td><?= $data['category_name'] ?></td>
                                            <td> <i class="fa fa-pencil" onclick="update_popup(<?= $data['id'] ?>, 'update_category')"></i><i class="fa fa-trash" onclick="delete_item('category_popup',<?= $data['id']?>)"></i></td>
                                            
                                        </tr>
                                        <?php } ?>
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Sub Category List</strong>
                            </div>
                            <div class="card-body">
                                <table id="sub-category-table" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Edit</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach($sub_category as $data){ ?>
                                        <tr>
                                            <td><?= $data['sub_category_name'] ?></td>
                                            <td> <i class="fa fa-pencil" onclick="update_popup(<?= $data['id'] ?>, 'update_sub_category')"></i><i class="fa fa-trash" onclick="delete_item('sub_category_popup',<?= $data['id']?>)"></i></td>
                                            
                                        </tr>
                                        <?php } ?>
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>


                </div>
                
                <div class="popup" id="category_popup">
                    <p class="confirm_pera"><strong>Confirm Delete Category</strong></p>
                    <p class="note_pera">Note:- All Products Under This Category Will Also Be DELETED</p>
                    <button class="btn btn-danger" onclick="set_no()">No</button>
                    <a href="<?= base_url(); ?>del_category/<?=  $data['id']?>"><button class="btn btn-success">Yes</button></a>
                </div>
                <div class="popup" id="sub_category_popup">
                    
                </div>
                <div class="popup" id="product_popup">
                    <p class="confirm_pera">Confirm Delete Product</p>
                    <!-- <p class="note_pera">Note:- All Products Under This Category Will Also Be DELETED</p> -->
                    <button class="btn btn-danger" onclick="set_no()">No </button>
                    <a href="<?= base_url(); ?>del_product/<?=  $data['id']?>"><button class="btn btn-success"> Yes</button></a>
                </div>

                <div class="row">

                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Products</strong>
                            </div>
                            <div class="card-body">
                                <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Price($)</th>
                                            <th>Description</th>
                                            <th>Image</th>
                                            <th>Edit</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach($product as $data){ ?>
                                        <tr>
                                            <td><?= $data['product_name'] ?></td>
                                            <td><?= $data['price'] ?></td>
                                            <td><?= $data['description'] ?></td>
                                            <td><img src="<?= base_url() ?>/uploads/<?= $data['main_image'] ?>" class="table_image" alt="Img"></td>
                                            <td> <a href="<?= base_url('edit-product/'.$data['id']) ?>"><i class="fa fa-pencil"></i></a><i class="fa fa-trash" onclick="delete_item('product_popup',<?= $data['id']?>)"></i></td>
                                            
                                        </tr>
                                        <?php } ?>
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>


                </div>
            </div><!-- .animated -->
        </div><!-- .content -->

        
        
        <div class="back_screen"></div>
        <div class="update_popup">
           <center><strong class="cat_heading"></strong></center> 
           <br>
            <input type="text" id="cat_value" class="form-control">
            <input type="hidden" id="cat_id" >
            <input type="hidden" id="update_url" >
            <br>
            <center>
            <button class="btn btn-danger" onclick="set_no()">Cancel </button>
            <button class="btn btn-success" onclick="update_cat()">Update</button>
            </center>
        </div>
        <?php include_once 'footer.php' ?>
    </div><!-- /#right-panel -->


    <!-- Right Panel -->

    <!-- Scripts -->



</body>
<script src="https://cdn.jsdelivr.net/npm/jquery@2.2.4/dist/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.4/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-match-height@0.7.2/dist/jquery.matchHeight.min.js"></script>
<script src="<?= base_url()  ?>/assets/js/main.js"></script>


<script src="<?= base_url()  ?>/assets/js/lib/data-table/datatables.min.js"></script>
<script src="<?= base_url()  ?>/assets/js/lib/data-table/dataTables.bootstrap.min.js"></script>
<script src="<?= base_url()  ?>/assets/js/lib/data-table/dataTables.buttons.min.js"></script>
<script src="<?= base_url()  ?>/assets/js/lib/data-table/buttons.bootstrap.min.js"></script>
<script src="<?= base_url()  ?>/assets/js/lib/data-table/jszip.min.js"></script>
<script src="<?= base_url()  ?>/assets/js/lib/data-table/vfs_fonts.js"></script>
<script src="<?= base_url()  ?>/assets/js/lib/data-table/buttons.html5.min.js"></script>
<script src="<?= base_url()  ?>/assets/js/lib/data-table/buttons.print.min.js"></script>
<script src="<?= base_url()  ?>/assets/js/lib/data-table/buttons.colVis.min.js"></script>
<script src="<?= base_url()  ?>/assets/js/init/datatables-init.js"></script>


<script type="text/javascript">
    $(document).ready(function() {
      $('#bootstrap-data-table').DataTable();
      $('#category-table').DataTable();
      $('#sub-category-table').DataTable();
  } );

  function delete_item(pop_id, prod_id){
    $(`#${pop_id}`).css('display','block')
    if (pop_id == 'product_popup') {
        
        $(`#${pop_id}`).html(`<p class="confirm_pera">Confirm Delete Product</p>
                        <!-- <p class="note_pera">Note:- All Products Under This Category Will Also Be DELETED</p> -->
                        <button class="btn btn-danger" onclick="set_no()">No </button>
                        <a href="<?= base_url(); ?>del_product/${prod_id}"><button class="btn btn-success"> Yes</button></a>`)
        }
        else if(pop_id=='category_popup'){
            $(`#${pop_id}`).html(`<p class="confirm_pera">Confirm Delete Sub Category</p>
                    <p class="note_pera">Note:- All Products Under This Sub Category Will Also Be DELETED</p>
                    <button class="btn btn-danger" onclick="set_no()">No</button>
                    <a href="<?= base_url(); ?>del_category/${prod_id}"><button class="btn btn-success">Yes</button></a>`)
        }
        else if(pop_id=='sub_category_popup'){
            $(`#${pop_id}`).html(`<p class="confirm_pera">Confirm Delete Sub Category</p>
                    <p class="note_pera">Note:- All Products Under This Sub Category Will Also Be DELETED</p>
                    <button class="btn btn-danger" onclick="set_no()">No</button>
                    <a href="<?= base_url(); ?>del_sub_category/${prod_id}"><button class="btn btn-success">Yes</button></a>`)
        }
        $(`.back_screen`).css('display','block')
     }


  function set_no(){
    $('.popup').css('display','none')
    $('.update_popup').css('display','none')
    $('.back_screen').css('display','none')

  }

  function update_popup(id, name){
    $.ajax({
        method: 'GET',
        url:`${name}/${id}`,
        success: function(data){
            var responseData = JSON.parse(data); // Parse the JSON response
            var category = responseData.cat_popup_val[0]; // Assuming there's only one category in the response
            var box_name = responseData.box_name; // Assuming there's only one category in the response
            var update_url = responseData.update_url; // Assuming there's only one category in the response
            var categoryName = category.category_name || category.sub_category_name ; // Fetching the category name
            var categoryID = category.id; // Fetching the category name
            // alert(responseData);
            $(".update_popup").css('display','block')
            $('.back_screen').css('display','block')

            $("#cat_value").val(categoryName)      
            $("#cat_id").val(categoryID)     
            $("#update_url").val(update_url)     
            $(".cat_heading").html(`Update ${box_name}`)     
        }

    });
  }
  function update_cat(id, name){
    let url = $("#update_url").val();
    let names = $("#cat_value").val();
    let cat_id = $("#cat_id").val();

    $.ajax({
        method: 'POST',
        url: url,
        data:{name: names, cat_id: cat_id},
        success: function(data){
            window.location.href = "<?php echo base_url('view-product') ?>"; 
        }

    });
  }
</script>
</html>
