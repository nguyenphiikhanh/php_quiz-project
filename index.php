<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Học tập JavaScript trên Website</title>
  <!-- bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

  <!-- CSS customize -->
  <link rel="stylesheet" href="./css/style.css">
  <link rel="stylesheet" href="./css/style_index.css">

</head>

<body>

  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-info">
    <a class="navbar-brand font-weight-bold" href="#">Fixed navbar</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link font-weight-bold" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link font-weight-bold" href="#">Link</a>
        </li>
        <li class="nav-item">
          <a class="nav-link font-weight-bold" href="#">Disabled</a>
        </li>
      </ul>

      <div class="dropdown mr-5">
        <img class="avatar dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" src="./img/user.jpg" alt="">

        <div class="dropdown-menu mt-1">
          <a class="dropdown-item hvcustomize" href="#"><i class="fas fa-edit"></i> Chỉnh sửa thông tin</a>
          <a class="dropdown-item hvcustomize" href="#"><i class="fas fa-edit"></i> Chỉnh sửa thông tin</a>
          <a class="dropdown-item hvcustomize" href="#"><i class="fas fa-edit"></i> Chỉnh sửa thông tin</a>

          <div class="dropdown-divider"></div>
          <a class="dropdown-item hvcustomize" href="#"><i class="fas fa-sign-out-alt"></i> Đăng xuất</a>
        </div>
      </div><div class="col-md-1"></div>

    </div>
  </nav>

  <main role="main" class="container mt-5">
    <div class="jumbotron">
      <h1>Navbar example</h1>
      <p class="lead">This example is a quick exercise to illustrate how fixed to top navbar works. As you scroll, it will remain fixed to the top of your browser's viewport.</p>
      <a class="btn btn-lg btn-primary" href="../../components/navbar/" role="button">View navbar docs &raquo;</a>
    </div>
  </main>

  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <!-- font awesome icon -->
  <script src="./js/fontAwesome.js"></script>


</body>

</html>