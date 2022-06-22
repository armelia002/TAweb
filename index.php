<?php
 require "koneksi.php";

 $queryProduk = mysqli_query($con, "SELECT id, nama, harga, foto, detail FROM produk LIMIT 6");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Melte Vanana</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <?php require "navbar.php"; ?>

    <!-- baner -->
    <div class="container-fluid banner d-flex align-items-center">
    </div>

    <!--Varian terlaris-->
    <div class="container-fluid py-5">
        <div class="container text-center">
            <h3>Varian Terlaris</h3>

            <div class="row mt-5">
                <div class="col-md-4 mb-3">
                    <div class="highligted-kategori varian-coklat-terlaris d-flex justify-content-center align-items-center">
                        <h4 class="text-white"><a class="no-decoration" href="produk.php?kategori=Keripik Pisang">Yummy Chocolate</a></h4>
                    </div>
                </div>

                <div class="col-md-4 mb-3">
                    <div class="highligted-kategori varian-taro-terlaris d-flex justify-content-center align-items-center">
                        <h4 class="text-white"><a class="no-decoration" href="produk.php?kategori=Keripik Pisang">Taro</a></h4>
                    </div>
                </div>

                <div class="col-md-4 mb-3">
                    <div class="highligted-kategori varian-grentea-terlaris d-flex justify-content-center align-items-center">
                        <h4 class="text-white"><a class="no-decoration" href="produk.php?kategori=Keripik Pisang">GreenTea</a></h4>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Tentang kami -->
    <div class="container-fluid warna1 py-5">
        <div class="container text-center text-white">
            <h3>Tentang Produk</h3>
            <p class="fs-5 mt-3">
            Melte Vanana kini hadir dengan 7 Varian rasa loh �� 1. Greentea 2. Yummy Chocholate 3. Chese Melt 4.Coffe Latte 5. Vanilla Milk 6 . Taro 7. Tiramisu Pastinya cocok bnget deh buat temen ngemil ataupun untuk oleh oleh �� Yuk buruan di order guys harganya murah loh hanya 16.000 /pcs� atau yang mau join reseller dan distributor bisa bnget nih yng mau mulai bisnis � � Akhir Ramadhan ada Diskon juga loh untuk min pembelian 10 pcs���
            </p>
        </div>
    </div>

    <!--produk-->
    <div class="container-fluid py-5">
        <div class="container text-center">
            <h3>Produk</h3>

            <div class="row mt-5">
                <?php while($data = mysqli_fetch_array($queryProduk)){ ?>
                <div class="col-sm-6 col-md-4 mb-3">
                    <div class="card h-100">
                        <div class="image-box">
                        <img src="image/<?php echo $data['foto']; ?>" class="card-img-top" alt="">
                        </div>

                        <div class="card-body">
                            <h5 class="card-tittle"><?php echo $data['nama']; ?></h5>
                            <p class="card-text text-truncate"><?php echo $data['detail']; ?></p>
                            <p class="text-card text-harga">Rp <?php echo $data['harga']; ?></p>
                            <a href="produk-detail.php?nama=<?php echo $data['nama'] ?>" class="btn btn-primary">Lihat Detail</a>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
            <a class="btn btn-outline-primary mt-3" href="produk.php">See More</a>
        </div>
    </div>

    <!--footer-->
    <?php require "footer.php"?>

    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="fontawesome/js/all.min.js"></script>
</body>

</html>