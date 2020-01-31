<?php 

require_once 'views/common/header.php';


 ?>
<body id="page-top">

  <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

    <a class="navbar-brand mr-1" href="">Codekago Admin</a>

    <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
      <i class="fas fa-bars"></i>
    </button>

    <!-- Navbar Search -->
    <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
      <div class="input-group">
        <input type="text" class="form-control" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
        <div class="input-group-append">
          <button class="btn btn-primary" type="button">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>

    <!-- Navbar -->
  <ul class="navbar-nav ml-auto ml-md-0">
      <li class="nav-item dropdown no-arrow">
        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-user-circle fa-fw"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
          <a class="dropdown-item" href="#">Settings</a>
          <a class="dropdown-item" href="#">Activity Log</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="logout">Logout</a>
        </div>
      </li>
    </ul>

  </nav>

  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="sidebar navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span>
        </a>
      </li>
    
      <li class="nav-item active">
        <a class="nav-link" href="add_posts">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Add Post</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="view_all_posts">
          <i class="fas fa-fw fa-table"></i>
          <span>View all post</span></a>
      </li>
      
    
    </ul>

    <div id="content-wrapper">

      <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="">Dashboard</a>
          </li>
          <li class="breadcrumb-item active">Posts</li>
        </ol>

        <!-- Area Chart Example-->
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-chart-area"></i>
            make post here</div>
        </div>



       <div class="form-column col-lg-5 col-md-12 col-sm-12">
            <div class="inner-column">
              
              <!--Contact Form-->
              <div class="contactform">
                <form method="post" action="" >
                  
                  <div class="form-group">
                    <input class="form-control" type="text" name="name" value="" placeholder="Topic">
                  </div>
                    
                  <div class="form-group">
                    <textarea class="form-control"  name="mess" placeholder="write.."></textarea>
                  </div>

                  
                  <div class="form-group">
                    <button type="submit" class=" btn btn-success" name="submit">Submit</button>
                  </div>                                        
                  
                </form>
              </div>
              
            </div>
          </div>
      <!-- /.container-fluid -->


    </div>
    <!-- /.content-wrapper -->

  </div>
  <!-- /#wrapper -->

 

  <!-- Bootstrap core JavaScript-->
 <?php 

require_once 'views/common/header.php';


 ?>