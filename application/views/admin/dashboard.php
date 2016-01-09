<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>OfferDekho Admin</title>
    <meta name="description" content="A admin dashboard theme that will get you started with Bootstrap 4." />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="generator" content="Codeply">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha/css/bootstrap.min.css" />
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" />

    <link rel="stylesheet" href="css/styles.css" />
  </head>
  <body >
    <nav class="navbar navbar-fixed-top navbar-dark bg-primary">
    <button class="navbar-toggler hidden-sm-up pull-right" type="button" data-toggle="collapse" data-target="#collapsingNavbar">
        ☰
    </button>
    <a class="navbar-brand" href="#">OfferDekho Admin</a>
    <div class="collapse navbar-toggleable-xs" id="collapsingNavbar">
        <ul class="nav navbar-nav pull-right">
            <li class="nav-item active">
                <a class="nav-link" href="#">Home <span class="sr-only">Home</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#"> <?php echo "Welcome ".$this->session->userdata('username');?> !</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#myAlert" data-toggle="collapse"></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="" data-target="#myModal" data-toggle="modal"></a>
            </li>
        </ul>
    </div>
</nav>
<div class="container-fluid" id="main">
    <div class="row row-offcanvas row-offcanvas-left">
        <div class="col-md-3 col-lg-2 sidebar-offcanvas" style="margin-top: 23px" id="sidebar" role="navigation">
            <ul class="nav nav-pills nav-stacked">
                <li class="nav-item"><a class="nav-link" href="#">Add Category</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Add Brand</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Add Product</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Add Admin</a></li>
                <li class="nav-item"><a class="nav-link" href="">Delete Category</a></li>
                <li class="nav-item"><a class="nav-link" href="">Delete Brand</a></li>
                <li class="nav-item"><a class="nav-link" href="">Delete Product</a></li>
                <li class="nav-item"><a class="nav-link" href="">Delete Admin</a></li>
                <li class="nav-item"><a class="nav-link" href="<?php echo site_url('admin/logout');?>">Logout</a></li>
               
            </ul>
        </div>
        <!--/col-->

        <div class="col-md-9 col-lg-10 main" style="margin-top: 50px;">

            <!--toggle sidebar button-->
            <p class="hidden-md-up">
                <button type="button" class="btn btn-primary-outline btn-sm" data-toggle="offcanvas"><i class="fa fa-chevron-left"></i> Menu</button>
            </p>

            <h1 class="display-1 hidden-xs-down">
           
            </h1>
            <p class="lead"> <?php echo "Welcome ".$this->session->userdata('username');?></p>

       
        </div>
        <!--/main col-->
    </div>

</div>


<!-- Modal ->
    <!--scripts loaded here-->
    
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha/js/bootstrap.min.js"></script>
    
    <script src="js/scripts.js"></script>
  </body>
</html>