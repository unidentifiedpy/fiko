<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>FiKo | Home</title>
  <link rel="stylesheet" type="text/css" href="<?= base_url()?>assets/css/stylesheet.css">
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?= base_url()?>assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?= base_url()?>assets/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?= base_url()?>assets/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url()?>assets/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?= base_url()?>assets/dist/css/skins/_all-skins.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  <style type="text/css">
   
  </style>
</head>
<!-- ADD THE CLASS layout-top-nav TO REMOVE THE SIDEBAR. -->
<body class="hold-transition skin-blue layout-top-nav">
<div class="wrapper">

  <header class="main-header">
    <nav class="navbar navbar-static-top" id="navbar_header">
      <div class="container">
        <div class="navbar-header">
          <a href="<?= base_url()?>assets/index2.html" class="navbar-brand"><b>FiKo</b><i> Online Filipino Korean Tutorial</i></a>
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
            <i class="fa fa-bars"></i>
          </button>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="<?=base_url()?>user/home">Home <span class="sr-only">(current)</span></a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Contact</a></li>
          </ul>
          <form class="navbar-form navbar-left" role="search">
            <div class="form-group">
              <input type="text" class="form-control" id="navbar-search-input" placeholder="Search">
            </div>
          </form>
        </div>
        <!-- /.navbar-collapse -->
        <!-- Navbar Right Menu -->
        <div class="navbar-custom-menu">
          <ul class="nav navbar-nav">
            
            <!-- User Account Menu -->
            <li class="dropdown user user-menu">
              <!-- Menu Toggle Button -->
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <!-- The user image in the navbar-->
                <img src="<?= base_url()?>assets/dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
                <!-- hidden-xs hides the username on small devices so only the image appears. -->
                <span class="hidden-xs"><?php echo $_SESSION['userdata'][0]->firstname;?> <?php echo $_SESSION['userdata'][0]->lastname;?></span>
              </a>
              <ul class="dropdown-menu" role="menu" style="width: 10px;">
                <li><a href="#">Acounts</a></li>
                <li><a href="#">Record</a></li>
                <li><a href="#">Rankings</a></li>
                <li class="divider"></li>
                <li><a href="<?= base_url()?>login/signout">Logout</a></li>
              </ul>
            </li>
          </ul>
        </div>
        <!-- /.navbar-custom-menu -->
      </div>
      <!-- /.container-fluid -->
    </nav>
  </header>
  <!-- Full Width Column -->
  <div class="content-wrapper">
    <div class="container">
      <!-- Content Header (Page header) -->
      <section class="content-header">

        <!-- for header -->
      </section>

      <!-- Main content -->
      <section class="content">
        <div class="row">

        <div class="col-sm-3">
         
          <div class="box"  id= "learnbox" >
            <!-- /.box-header -->
            <div class="box-body">
              <span style="font-size: 100px; margin-left: "> ㅏ</span>
            </div>
           
          
            <!-- audio button -->
            <div class ="audiobutton" id="a"  style="position:absolute; right: 5px; top: 20px; background-color: white;">
             <button onclick="playAudio()" value="sound" type="button" id="aud" style="margin-left: 6px; ">
              <span class="glyphicon glyphicon-volume-up" style="" ></span></button>
           </div>
           <span style="font-family:arial; font-size: 100%; color: green; position:absolute; left: 120%; top: 10%;"><span style="font-size: 200%;">Patinig</span><span style="font-size: 110%"> <br> A <br> Pagbigkas:(a)</span>
            <!-- /.box-body -->
      
          </div>
         

          <!-- /.box -->
        </div>

        <div class="col-sm-3">
           <div class="box"  id= "learnbox">
            <!-- /.box-header -->
            <div class="box-body">
              <span style=" font-size: 100px; margin-left: 5%"> ㅔ</span>
            </div>

            <div class ="audiobutton" style="position:absolute; right: 5px; top: 20px;">
             <button onclick="playAudio()" value="sound" type="button" id="audio" style="margin-left: 6px; ">
              <span class="glyphicon glyphicon-volume-up" style="" ></span></button>
           </div>

            <span style="font-family:arial; font-size: 100%; color: green; position:absolute; left: 120%; top: 10%;"><span style="font-size: 200%;">Patinig</span><span style="font-size: 110%"> <br> Ae <br> Pagbigkas:(ae)</span>
   
          </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <div class="col-md-3">

           <div class="box"  id= "learnbox" >
            <!-- /.box-header -->
            <div class="box-body">
              <span style=" font-size: 100px; margin-left: 5%"> ㅔ</span>
            </div>
              
           
              
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <div class="col-md-4">
          <div class="box box-default">
            <!-- /.box-header -->
            <div class="box-body">
              <img src="<?= base_url()?>images/logo.png" style="width:100px;height:100px;">
               Letter: D
              
              
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <div class="col-md-4">
          <div class="box box-default">
            <!-- /.box-header -->
            <div class="box-body">
              <img src="<?= base_url()?>images/logo.png" style="width:100px;height:100px;"> 
               Letter: E
              
              
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
      </div>
      </section>
      <!-- /.content -->
    </div>
    <!-- /.container -->
  </div>
  <!-- /.content-wrapper -->
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->

<script src="<?= base_url()?>assets/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?= base_url()?>assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="<?= base_url()?>assets/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="<?= base_url()?>assets/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?= base_url()?>assets/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?= base_url()?>assets/dist/js/demo.js"></script>

<script> 
  function playAudio() {
    var x = new Audio(src='<?=base_url()?>/files/kakain.mp3');
    x.play();
  }
  
</script>


</body>
</html>
