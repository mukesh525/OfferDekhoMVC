<html>
  <head>
    <meta charset="utf-8">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha/js/bootstrap.min.js"></script>
    <script src=<?php echo site_url("js/scripts.js")?>></script>
     <script type="text/javascript">
     var BASE_URL = "<?php echo base_url();?>";</script>
    <title>OfferDekho Admin</title>
    <meta name="description" content="A admin dashboard theme that will get you started with Bootstrap 4." />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="generator" content="Codeply">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha/css/bootstrap.min.css" />
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" />
    <link rel="shortcut icon" href="<?=base_url()?>images/logo1.png">
 <style type="text/css">
     
.tg  {margin-top: 2%;width: 100%;margin-left: -4%;border-collapse: collapse;border-spacing: 0;}
.tg td{font-family:Arial, sans-serif;font-size:14px;padding:10px 5px;border-width:1px;overflow:hidden;word-break:normal;}
.tg th{font-family:Arial, sans-serif;font-size:14px;font-weight:normal;padding:10px 5px;border-width:1px;overflow:hidden;word-break:normal;}
.tg .tg-baqh{text-align:center;vertical-align:top;width: 40%;padding-top: 5%}
.tg .tg-yw4l{vertical-align:top}
.form-control1 {width: 55%;margin-left: 3%;margin-bottom: 2%;padding: .375rem .75rem;font-size: 1rem; line-height: 1.5;color: #55595c;
background-color: #fff;background-image: none;border: .0625rem solid #ccc;border-radius: .25rem;}
.form-control2 {width:48%;margin-left: -4%;margin-bottom: 2%;padding: .375rem .75rem;font-size: 1rem; line-height: 1.5;color: #55595c;
background-color: #fff;background-image: none;border: .0625rem solid #ccc;border-radius: .25rem;}
</style>
    <link rel="stylesheet" href="css/styles.css" />
  </head>
  <body>
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