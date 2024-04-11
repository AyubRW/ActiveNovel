<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="./assets/img/logos/head_icon.png">
  <title>
    Bulgogi GO & Warehouse
  </title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <!-- Nucleo Icons -->
  <link href="./assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="./assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <link href="./assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link id="pagestyle" href="./assets/css/argon-dashboard.css?v=2.0.4" rel="stylesheet" />
</head>

<body class="g-sidenav-show   bg-gray-100">
  <div class="min-height-300 bg-primary position-absolute w-100"></div>
  <aside class="sidenav bg-white navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-4 " id="sidenav-main">
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0" href="https://bulgogi.store/" target="_blank">
        <img src="./assets/img/logos/main_icon.svg" class="navbar-brand-img h-100" alt="main_logo">
        <span class="ms-1 font-weight-bold">Bulgogi.id</span>
      </a>
    </div>
    <hr class="horizontal dark mt-0">
    <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" href="index.php">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-money-coins text-warning text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Hitung Jajanan Korea</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="ch.php">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-credit-card text-success text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Hitung Jajanan China</span>
          </a>
        </li>

      </ul>
    </div>
    <div class="sidenav-footer mx-3 ">
      <div class="card card-plain shadow-none" id="sidenavCard">
        <img class="w-30 mx-auto" src="./assets/img/logos/main_icon.svg" alt="sidebar_illustration">
        <div class="card-body text-center p-3 w-100 pt-0">
          <div class="docs-info">
            <h6 class="mb-0">Need help?</h6>
            <p class="text-xs font-weight-bold mb-0">Contact bulgogi admin</p>
          </div>
        </div>
      </div>
      <a href="http://wa.me/6285156226606" target="_blank" class="btn btn-dark btn-sm w-100 mb-3">WhatsApp</a>
      <a class="btn btn-primary btn-sm mb-0 w-100" href="https://twitter.com/BulgogiKstuff" type="button">Twitter</a>
    </div>
  </aside>
  <main class="main-content position-relative border-radius-lg ">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl " id="navbarBlur" data-scroll="false">
      <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-white" href="javascript:;">Bulgogi.id</a></li>
            <li class="breadcrumb-item text-sm text-white active" aria-current="page">Hitung Harga Jajanan Korea</li>
          </ol>
          <h6 class="font-weight-bolder text-white mb-0">Hitung Harga Jajanan Korea GO By Bulgogi</h6>
        </nav>
        <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
          <div class="ms-md-auto pe-md-3 d-flex align-items-center">
          </div>
          <ul class="navbar-nav  justify-content-end">
            <li class="nav-item d-flex align-items-center">
            </li>
            <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-white p-0" id="iconNavbarSidenav">
                <div class="sidenav-toggler-inner">
                  <i class="sidenav-toggler-line bg-white"></i>
                  <i class="sidenav-toggler-line bg-white"></i>
                  <i class="sidenav-toggler-line bg-white"></i>
                </div>
              </a>
            </li>
            <li class="nav-item px-3 d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-white p-0">
                <i class="fa fa-cog fixed-plugin-button-nav cursor-pointer"></i>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- End Navbar -->

    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header pb-0">
              <div class="d-flex align-items-center">
                <p class="mb-0">Input Harga KR</p>
              </div>
            </div>
            <form method="post">
              <div class="card-body">
                <p class="text-uppercase text-sm">Rate KR GO By Bulgogi 11.9</p>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="example-text-input" class="form-control-label">Harga Barang</label>
                      <input class="form-control" name="harga_kr" type="text" placeholder="Contoh : 0.8 atau 0,8" required>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="example-text-input" class="form-control-label">Jumlah Member GO Yang Coret</label>
                      <input class="form-control" name="coret_kr" type="number" placeholder="Input Hanya Berupa Angka" required>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <button class="btn btn-primary btn-sm ms-auto" name="hitung_kr">Hitung</button>
                    </div>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>

    <?php
    if (isset($_POST['hitung_kr'])) {
      $harga_kr = $_POST['harga_kr'];
      $harga_kr_dec = str_replace(',', '.', $harga_kr);
      $coret_kr = $_POST['coret_kr'];
      $rate_go = 11.9;
      $shipping1 = 0.18;
      $shipping2 = 0.2;
      $shipping3 = 0.4;
      $shipping4 = 0.0;
      $perkalian_won = 10000;
      $fee_admin = 3000;
      $fee_wh = 3000;
      $fee_tf = 3000;
      $hitung1 = ($harga_kr_dec + $shipping1 / $coret_kr) * ($perkalian_won * $rate_go) + ($fee_admin + $fee_wh + $fee_tf);
      $hasil1 = 'Rp ' . number_format($hitung1, 0, ",", ".");
      $hitung2 = ($harga_kr_dec + $shipping2 / $coret_kr) * ($perkalian_won * $rate_go) + ($fee_admin + $fee_wh + $fee_tf);
      $hasil2 = 'Rp ' . number_format($hitung2, 0, ",", ".");
      $hitung3 = ($harga_kr_dec + $shipping3 / $coret_kr) * ($perkalian_won * $rate_go) + ($fee_admin + $fee_wh + $fee_tf);
      $hasil3 = 'Rp ' . number_format($hitung3, 0, ",", ".");
      $hitung4 = ($harga_kr_dec + $shipping4 / $coret_kr) * ($perkalian_won * $rate_go) + ($fee_admin + $fee_wh + $fee_tf);
      $hasil4 = 'Rp ' . number_format($hitung4, 0, ",", ".");
    }
    ?>

    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card mb-4" name="card-kr">
            <div class="card-header pb-0">
              <h6>Harga Jajanan Korea GO By Bulgogi</h6>
              <p class="text-xs text-secondary mb-0">Error akan hilang ketika sudah melakukan perhitungan</p>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Biaya Pengiriman</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Harga Barang</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Jumlah Member GO Yang Dicoret</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Harga Bersih KR</th>
                    </tr>
                  </thead>
                  <tbody>
                  <tr>
                      <td>
                        <div class="d-flex px-2 py-1">
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm">Free Shipping</h6>
                            <p class="text-xs text-secondary mb-0">Free Shipping</p>
                          </div>
                        </div>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0"><?php echo '₩ ' . $harga_kr * $perkalian_won; ?></p>
                        <p class="text-xs text-secondary mb-0"><?= $harga_kr ?></p>
                      </td>
                      <td class="align-middle text-center text-sm">
                        <span class="text-xm font-weight-bold mb-0"><?= $coret_kr ?></span>
                      </td>
                      <td class="align-middle text-center text-sm">
                        <span class="text-xm font-weight-bold mb-0"><?= $hasil4 ?></span>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="d-flex px-2 py-1">
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm">₩ 1800</h6>
                            <p class="text-xs text-secondary mb-0"><?php echo "$shipping1"; ?></p>
                          </div>
                        </div>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0"><?php echo '₩ ' . $harga_kr * $perkalian_won; ?></p>
                        <p class="text-xs text-secondary mb-0"><?= $harga_kr ?></p>
                      </td>
                      <td class="align-middle text-center text-sm">
                        <span class="text-xm font-weight-bold mb-0"><?= $coret_kr ?></span>
                      </td>
                      <td class="align-middle text-center text-sm">
                        <span class="text-xm font-weight-bold mb-0"><?= $hasil1 ?></span>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="d-flex px-2 py-1">
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm">₩ 2000</h6>
                            <p class="text-xs text-secondary mb-0"><?php echo "$shipping2"; ?></p>
                          </div>
                        </div>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0"><?php echo '₩ ' . $harga_kr * $perkalian_won; ?></p>
                        <p class="text-xs text-secondary mb-0"><?= $harga_kr ?></p>
                      </td>
                      <td class="align-middle text-center text-sm">
                        <span class="text-xm font-weight-bold mb-0"><?= $coret_kr ?></span>
                      </td>
                      <td class="align-middle text-center text-sm">
                        <span class="text-xm font-weight-bold mb-0"><?= $hasil2 ?></span>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="d-flex px-2 py-1">
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm">₩ 4000</h6>
                            <p class="text-xs text-secondary mb-0"><?php echo "$shipping3"; ?></p>
                          </div>
                        </div>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0"><?php echo '₩ ' . $harga_kr * $perkalian_won; ?></p>
                        <p class="text-xs text-secondary mb-0"><?= $harga_kr ?></p>
                      </td>
                      <td class="align-middle text-center text-sm">
                        <span class="text-xm font-weight-bold mb-0"><?= $coret_kr ?></span>
                      </td>
                      <td class="align-middle text-center text-sm">
                        <span class="text-xm font-weight-bold mb-0"><?= $hasil3 ?></span>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
      <footer class="footer pt-3  ">
        <div class="container-fluid">
          <div class="row align-items-center justify-content-lg-between">
            <div class="col-lg-6 mb-lg-0 mb-4">
              <div class="copyright text-center text-sm text-muted text-lg-start">
                © <script>
                  document.write(new Date().getFullYear())
                </script>,
                made with <i class="fa fa-heart"></i> by
                <a href="https://twitter.com/BulgogiKstuff" class="font-weight-bold" target="_blank">Bulgogi Team</a>
                Find Ure K-Merch Here
              </div>
            </div>
            <div class="col-lg-6">
              <ul class="nav nav-footer justify-content-center justify-content-lg-end">
                <li class="nav-item">
                  <a href="https://www.instagram.com/bulgogi.id/" class="nav-link text-muted" target="_blank">Bulgogi On Instagram</a>
                </li>
                <li class="nav-item">
                  <a href="https://linktr.ee/bulgogi.id" class="nav-link text-muted" target="_blank">About Bulgogi</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </footer>
    </div>
  </main>
  <div class="fixed-plugin">
    <a class="fixed-plugin-button text-dark position-fixed px-3 py-2">
      <i class="fa fa-cog py-2"> </i>
    </a>
    <div class="card shadow-lg">
      <div class="card-header pb-0 pt-3 ">
        <div class="float-start">
          <h5 class="mt-3 mb-0">Bulgogi.id</h5>
          <p>Find Ure K-Merch Here</p>
        </div>
        <div class="float-end mt-4">
          <button class="btn btn-link text-dark p-0 fixed-plugin-close-button">
            <i class="fa fa-close"></i>
          </button>
        </div>
        <!-- End Toggle Button -->
      </div>
      <hr class="horizontal dark my-1">
      <div class="card-body pt-sm-3 pt-0 overflow-auto">
        <!-- Sidebar Backgrounds -->
        <div>
          <h6 class="mb-0">Sidebar Colors</h6>
        </div>
        <a href="javascript:void(0)" class="switch-trigger background-color">
          <div class="badge-colors my-2 text-start">
            <span class="badge filter bg-gradient-primary active" data-color="primary" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-dark" data-color="dark" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-info" data-color="info" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-success" data-color="success" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-warning" data-color="warning" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-danger" data-color="danger" onclick="sidebarColor(this)"></span>
          </div>
        </a>
        <!-- Sidenav Type -->
        <div class="mt-3">
          <h6 class="mb-0">Sidenav Type</h6>
          <p class="text-sm">Choose between 2 different sidenav types.</p>
        </div>
        <div class="d-flex">
          <button class="btn bg-gradient-primary w-100 px-3 mb-2 active me-2" data-class="bg-white" onclick="sidebarType(this)">White</button>
          <button class="btn bg-gradient-primary w-100 px-3 mb-2" data-class="bg-default" onclick="sidebarType(this)">Dark</button>
        </div>
        <p class="text-sm d-xl-none d-block mt-2">You can change the sidenav type just on desktop view.</p>
        <!-- Navbar Fixed -->
        <div class="d-flex my-3">
          <h6 class="mb-0">Navbar Fixed</h6>
          <div class="form-check form-switch ps-0 ms-auto my-auto">
            <input class="form-check-input mt-1 ms-auto" type="checkbox" id="navbarFixed" onclick="navbarFixed(this)">
          </div>
        </div>
        <hr class="horizontal dark my-sm-4">
        <div class="mt-2 mb-5 d-flex">
          <h6 class="mb-0">Light / Dark</h6>
          <div class="form-check form-switch ps-0 ms-auto my-auto">
            <input class="form-check-input mt-1 ms-auto" type="checkbox" id="dark-version" onclick="darkMode(this)">
          </div>
        </div>
        <a class="btn bg-gradient-dark w-100" href="https://line.me/ti/g/GcC66dzZ_W">Join GO By Bulgogi Boy Group</a>
        <a class="btn bg-gradient-light w-100" href="https://line.me/ti/g/W3Q2DU5XZj">Join GO By Bulgogi Girl Group</a>
        <a class="btn btn-outline-dark w-100" href="http://s.id/JoinWarehouseBulgogi">Join Korean Warehouse By Bulgogi</a>
        <div class="w-100 text-center">
          <h6 class="mt-3">Thank you for trusting us!</h6>
          <a href="https://twitter.com/BulgogiKstuff" class="btn btn-dark mb-0 me-2" target="_blank">
            <i class="fab fa-twitter me-1" aria-hidden="true"></i> Tweet
          </a>
          <a href="https://shope.ee/1VUP1cSYFy" class="btn btn-dark mb-0 me-2" target="_blank">
            <i class="fas fa-shopping-bag me-1" aria-hidden="true"></i> Shopee
          </a>
        </div>
      </div>
    </div>
  </div>
  <!--   Core JS Files   -->
  <script src="./assets/js/core/popper.min.js"></script>
  <script src="./assets/js/core/bootstrap.min.js"></script>
  <script src="./assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="./assets/js/plugins/smooth-scrollbar.min.js"></script>
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
  <!-- Github buttons -->
  <script async defer src="#"></script>
  <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="./assets/js/argon-dashboard.min.js?v=2.0.4"></script>
</body>

</html>