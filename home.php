


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Responsive Bootstrap 4 Magazine/Blog Theme">
  <meta name="author" content="Bootlab">

  <title>Milo - Magazine/Blog Theme</title>

  <link href="css/app.css" rel="stylesheet">
</head>
<body>

  <header>
    <nav class="navbar navbar-expand-md navbar-light bg-white absolute-top">
      <div class="container">

        <button class="navbar-toggler order-2 order-md-1" type="button" data-toggle="collapse" data-target=".navbar-collapse" aria-controls="navbar-left navbar-right" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse order-3 order-md-2" id="navbar-left">
          <ul class="navbar-nav mr-auto">
            
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="dropdown02" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">About</a>
              <div class="dropdown-menu" aria-labelledby="dropdown02">
                <a class="dropdown-item" href="about">About</a>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="dropdown03" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Contact</a>
              <div class="dropdown-menu" aria-labelledby="dropdown03">
                <a class="dropdown-item" href="contact">contact</a>
              </div>
            </li>
            
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="dropdown03" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Register</a>
              <div class="dropdown-menu" aria-labelledby="dropdown03">
                <a class="dropdown-item" href="register">Register</a>
              </div>
            </li>
          </ul>
        </div>

        <a class="navbar-brand mx-auto order-1 order-md-3" href="index.html">Milø</a>

        <div class="collapse navbar-collapse order-4 order-md-4" id="navbar-right">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="about">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact">Contact</a>
            </li>
          </ul>
          <form class="form-inline" role="search">
            <input class="search js-search form-control form-control-rounded mr-sm-2" type="text" title="Enter search query here.." placeholder="Search.." aria-label="Search">
          </form>
        </div>
      </div>
    </nav>
  </header>

  <main class="main pt-4">

    <div class="container">

      <div class="row">
        <div class="col-md-9">



          <?php 
      // $posts = array();

      if (count($posts) > 0) {
        foreach ($posts as $post) {
         $id = $post['id'];
          $contents = $post['contents'];
          $topic = $post['topic'];
          $mess = $post['mess'];
          $date = date('d-m-Y', strtotime($post['date']));

       
          echo "  <article class='card mb-4'>
            <header class='card-header'>
              <div class='card-meta'>
                $date
              </div>
             
                <h4 class='card-title'><a href='post'>$topic</a></h4>
              </a>
            </header>
            <a href='post-image.html'>
              <img class='card-img' src='img/articles/8.jpg' alt='' />
            </a>
            <div class='card-body'>
              <p class='card-text'>$mess </p>
            </div>
          </article>";

          echo "<form method='POST'>
            <div class='form-group'>
              <textarea class='form-control' name='contents' rows='4' placeholder='Message'></textarea>
            </div>
              <button type='submit' class=' btn btn-success' name='submit'>Submit</button>
          </form>";

          echo "<div class='card-body'>
               <p class='card-text'>$contents </p>
             </div>";


        }
      }else{
        echo "<tr>";
        echo "<td colspan='7'>No posts</td>";
        echo "</tr>";
      }
   ?>


        
          </div>
        </div>
      </div>
    </div>

  </main>

  <div class="site-newsletter">
    <div class="container">
      <div class="text-center">
        <h3 class="h4 mb-2">Subscribe to our newsletter</h3>
        <p class="text-muted">Join our monthly newsletter and never miss out on new stories and promotions.</p>

        <div class="row">
          <div class="col-xs-12 col-sm-9 col-md-7 col-lg-5 ml-auto mr-auto">
            <div class="input-group mb-3 mt-3">
              <input type="text" class="form-control" placeholder="Email address" aria-label="Email address">
              <span class="input-group-btn">
                <button class="btn btn-secondary" type="button">Subscribe</button>
              </span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="site-instagram">
    <div class="action">
      <a class="btn btn-light" href="#">
        Follow us @ Instagram
      </a>
    </div>
    <div class="row no-gutters">
      <div class="col-sm-6">
        <div class="row no-gutters">
          <div class="col-3">
            <a class="photo" href="#">
              <img class="img-fluid" src="img/instagram/1.jpg" alt="" />
            </a>
          </div>
          <div class="col-3">
            <a class="photo" href="#">
              <img class="img-fluid" src="img/instagram/2.jpg" alt="" />
            </a>
          </div>
          <div class="col-3">
            <a class="photo" href="#">
              <img class="img-fluid" src="img/instagram/3.jpg" alt="" />
            </a>
          </div>
          <div class="col-3">
            <a class="photo" href="#">
              <img class="img-fluid" src="img/instagram/4.jpg" alt="" />
            </a>
          </div>
        </div>
      </div>
      <div class="col-sm-6">
        <div class="row no-gutters">
          <div class="col-3">
            <a class="photo" href="#">
              <img class="img-fluid" src="img/instagram/5.jpg" alt="" />
            </a>
          </div>
          <div class="col-3">
            <a class="photo" href="#">
              <img class="img-fluid" src="img/instagram/6.jpg" alt="" />
            </a>
          </div>
          <div class="col-3">
            <a class="photo" href="#">
              <img class="img-fluid" src="img/instagram/7.jpg" alt="" />
            </a>
          </div>
          <div class="col-3">
            <a class="photo" href="#">
              <img class="img-fluid" src="img/instagram/8.jpg" alt="" />
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>


  <footer class="site-footer bg-darkest">
    <div class="container">

      <ul class="nav justify-content-center">
        <li class="nav-item">
          <a class="nav-link" href="#">Privacy policy</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Terms</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Feedback</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Advertise</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="page-contact.html">Contact</a>
        </li>
      </ul>
      <div class="copy">
       <a href="https://disqus.com/">Disqus</a>
      </div>
      
      <div class="copy">
        &copy; Milo 2019<br />
        All rights reserved
      </div>
    </div>
  </footer>

  <script src="js/app.js"></script>
</body>
</html>