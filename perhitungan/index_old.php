<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bulgogi GO & Korean Warehouse</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>

<body>

    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" aria-disabled="true">Disabled</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="p-3 mb-2 bg-primary text-white">
        <div class="container">
            <div class="container text-center">
                <div class="row">
                    <div class="col-md-12">
                        <h3>Hitung Jajanan Korea GO By Bulgogi</h3>
                        <form class="row gy-2 gx-3 align-items-center" method="post">
                            <div class="mb-3">
                                <label for="formGroupExampleInput" class="form-label">Input Harga Korea</label>
                                <input type="text" name="harga_kr" class="form-control" id="formGroupExampleInput" placeholder="Contoh : 0.8 atau 0,8">
                            </div>
                            <div class="mb-3">
                                <label for="formGroupExampleInput2" class="form-label">Jumlah Member Yang Coret</label>
                                <input type="number" name="coret_kr" class="form-control" id="formGroupExampleInput2" placeholder="Jumlah Member GO Yang Coret">
                            </div>
                            <div class="mb-3">
                                <button type="submit" name="hitung_kr" class="btn btn-danger">Hitung Harga Korea</button>
                            </div>
                        </form>
                        <?php
                        if (isset($_POST['hitung_kr'])) {
                            $harga_kr = $_POST['harga_kr'];
                            $harga_kr_dec = str_replace(',','.', $harga_kr);
                            $coret_kr = $_POST['coret_kr'];
                            $rate_go = 11.98;
                            $shipping1 = 0.18;
                            $shipping2 = 0.2;
                            $shipping3 = 0.4;
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

                            // echo "
                            // <table border='1' cellpading='4'>
                            // <tr>
                            //     <th>Pengiriman</th>
                            //     <th>Harga Barang</th>
                            //     <th>Jumlah Member Yang Coret</th>
                            //     <th>Harga Bersih KR</th>
                            // </tr>
                            // <tr>
                            //     <th>₩ 1.800</th>
                            //     <td>$harga_kr</td>
                            //     <td>$coret_kr</td>
                            //     <td>$hitung1</td>
                            // </tr>
                            // <tr>
                            //     <th>₩ 2.000</th>
                            //     <td>$harga_kr</td>
                            //     <td>$coret_kr</td>
                            //     <td>$hitung2</td>
                            // </tr>
                            // <tr>
                            //     <th>₩ 4000</th>
                            //     <td>$harga_kr</td>
                            //     <td>$coret_kr</td>
                            //     <td>$hitung3</td>
                            // </tr>
                            // </table>
                            // ";
                        }
                        ?>
                        <h3>Harga Jajanan Korea</h3>
                        <table class="table align-middle table-striped-columns">
                            <thead>
                                <tr>
                                    <th scope="col">Biaya Pengiriman</th>
                                    <th scope="col">Biaya Pengiriman</th>
                                    <th scope="col">Harga Barang</th>
                                    <th scope="col">Jumlah Member Yang Coret</th>
                                    <th scope="col">Harga Bersih KR</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row"><?= $shipping1 ?></th>
                                    <td><?= $harga_kr ?></td>
                                    <td><?= $coret_kr ?></td>
                                    <td><?= $hasil1 ?></td>
                                </tr>
                                <tr>
                                    <th scope="row"><?= $shipping2 ?></th>
                                    <td><?= $harga_kr ?></td>
                                    <td><?= $coret_kr ?></td>
                                    <td><?= $hasil2 ?></td>
                                </tr>
                                <tr>
                                    <th scope="row"><?= $shipping3 ?></th>
                                    <td><?= $harga_kr ?></td>
                                    <td><?= $coret_kr ?></td>
                                    <td><?= $hasil3 ?></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="col-md-12 bg-warning">.col-6</div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>
</body>

</html>