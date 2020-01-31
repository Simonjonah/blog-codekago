<?php 

require_once 'views/common/header.php';


 ?>

<body class="bg-dar'k">

  <div class="container">
    <div class="card card-register mx-auto mt-5">
      <div class="card-header">Log In</div>
      <div class="card-body">
        <form method="POST" accept="">
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">

                <div class="form-group">
                    <input class="form-control" type="text" name="username" placeholder="username">
                  </div>
                  <div class="form-group">
                    <input class="form-control"  type="text" name="pas" value="" placeholder="password">
                  </div>  
                <div class="form-group">
                    <button type="submit" class=" btn btn-success" name="submit">Submit</button>
              </div>
        </form>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
 
  <?php 

require_once 'views/common/footer.php';


 ?> 
