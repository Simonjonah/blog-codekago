<?php 

require_once 'common/header.php';


 ?>

 <div class="container text-center">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">

                <form  action="" method="post">
                    <h1>Register <br><br></h1>
                    
                    

                </form>
            </div>
        </div>
    </div> 

<body class="bg-dar'k">

  <div class="container">
    <div class="card card-register mx-auto mt-5">
      <div class="card-header">Register an Account</div>
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

require_once 'common/footer.php';


 ?>