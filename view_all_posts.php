<?php 

require_once 'views/common/header.php';
 //require '../include/database.php'; 



 ?>
<body id="page-top">

  <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

    <a class="navbar-brand mr-1" href="home">Cyberflux</a>

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
        <a class="nav-link" href="add_posts">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span>
        </a>
      </li>
   <li class="nav-item active">
        <a class="nav-link" href="add_posts">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Add posts</span></a>
      </li>

      
      
      <li class="nav-item">
        <a class="nav-link" href="view_all_posts">
          <i class="fas fa-fw fa-table"></i>
          <span>view all posts</span></a>
      </li>
      <!-- <li class="nav-item">
        <a class="nav-link" href="services_table">
          <i class="fas fa-fw fa-table"></i>
          <span>Services Table</span></a>
      </li> -->
    </ul>

    <div id="content-wrapper">

      <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="home">Dashboard</a>
          </li>
          <li class="breadcrumb-item active">Contact Tables</li>
        </ol>

        <!-- DataTables Example -->
        <?php display_status(); ?>
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            All Posts</div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered"  width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Topic</th>
                    <th>content</th>
                    <th>Post Date</th>
                     <th>Comments</th>
                    <th>Delete</th>
                    <th>Edit</th>
                  </tr>
                  <thead>
                    <tbody>
                      
                  


<?php 
      // $posts = array();

      if (count($posts) > 0) {
        foreach ($posts as $post) {
          $id = $post['id'];
          $name = $post['name'];
          $topic = $post['topic'];
          $mess = $post['mess'];
        
          $date = date('d-m-Y', strtotime($post['date']));
          $contents = $post['contents'];

          echo "<tr>";
          echo "<td>$id</td>";
          echo "<td>$name</td>";
          echo "<td>$topic</td>";
  
          
          echo "<td>$mess</td>";
          //echo "<td><img src ='data:image/jpeg;base64,' .base64_encode($row['name']).'/></td>"
          echo "<td>$date</td>";
          echo "<td>$contents</td>";

          echo " <td><a href='delete_post?id={$id}'>Delete</a></td>";
          echo " <td><a href='edit_post?id={$id}'>Edit</a></td>";
          echo "</tr>";

        }
      }else{
        echo "<tr>";
        echo "<td colspan='7'>No posts</td>";
        echo "</tr>";
      }




   ?>
                
              
                </tbody>
              </table>
            </div>
          </div>
          <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
        </div>

        <p class="small text-center text-muted my-5">
          <em>More table examples coming soon...</em>
        </p>

      </div>
     

    </div>
    <!-- /.content-wrapper -->

  </div>
  <!-- /#wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Bootstrap core JavaScript-->
 <?php 

require_once 'views/common/footer.php';


 ?>