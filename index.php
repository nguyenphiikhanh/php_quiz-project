<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Học lập trình JavaScript trên Website</title>
  <!-- bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

  <!-- CSS customize -->
  <link rel="stylesheet" href="./css/style.css">
  <link rel="stylesheet" href="./css/style_index.css">

  <!-- google font -->
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

</head>

<body>
  <!-- header -->
  <?php include_once("./layout/header.php") ?>

  <!-- timer countdown -->
  <div class="row mt-2">
    <div class="container">
      <div class="justify-content-end row text-wrap">
        <span class="bg-light btn btn-lg text-danger">15:23</span>
      </div>
    </div>
  </div>

  <main role="main" class="container mt-5">
    <div class="jumbotron">
      <h1>Navbar example</h1>
      <p class="lead">This example is a quick exercise to illustrate how fixed to top navbar works. As you scroll, it will remain fixed to the top of your browser's viewport.</p>
      <a class="btn btn-lg btn-primary" href="../../components/navbar/" role="button">View navbar docs &raquo;</a>
    </div>
  </main>


  <!-- footer -->
  <?php include_once("./layout/footer.php") ?>

  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <!-- font awesome icon -->
  <script src="./js/fontAwesome.js"></script>


</body>

</html>