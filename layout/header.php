<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-info">

  <div class="collapse navbar-collapse ml-5">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link font-weight-bold" href="./index.php">Trang chủ</a>
      </li>

      <li class="nav-item">
        <a class="nav-link font-weight-bold" href="./exampoint.php">Xem kết quả thi</a>
      </li>


      <?php
      if (isset($_SESSION['role']) && $_SESSION['role'] == 'admin') { ?>
        <li class="nav-item bg-danger">
          <a class="nav-link font-weight-bold text-uppercase" href="./admin/index.php">Admin C-panel</a>
        </li>

      <?php }
      ?>
    </ul>

    <div class="dropdown mr-5">
      <img class="avatar dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" src="./img/user.jpg" alt="">

      <div class="dropdown-menu mt-1">
        <a class="dropdown-item hvcustomize" href="./userInfor.php"><i class="fas fa-edit"></i> Chỉnh sửa thông tin</a>

        <div class="dropdown-divider"></div>
        <a class="dropdown-item hvcustomize" href="./logout.php"><i class="fas fa-sign-out-alt"></i> Đăng xuất</a>
      </div>
    </div>
    <div class="col-md-1"></div>

  </div>
</nav>