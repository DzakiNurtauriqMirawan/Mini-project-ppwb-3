<?php

@include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom admin css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php @include 'header.php'; ?>

<section class="heading">
    <h3>about us</h3>
    <p> <a href="home.php">home</a> / about </p>
</section>

<section class="about">

    <div class="flex">

        <div class="image">
            <img src="images/about-img-1.png" alt="">
        </div>

        <div class="content">
            <h3>why choose us?</h3>
            <p>Karena kami menyediakan bunga berkualitas tinggi, pilihan yang beragam, layanan pelanggan yang profesional, pengiriman tepat waktu, harga terjangkau, dan reputasi yang terpercaya.</p>
            <a href="shop.php" class="btn">shop now</a>
        </div>

    </div>

    <div class="flex">

        <div class="content">
            <h3>what we provide?</h3>
            <p>Kami menyediakan bunga berkualitas tinggi dari petani terpercaya, berbagai macam rangkaian bunga untuk berbagai kesempatan, layanan pelanggan yang profesional, pengiriman tepat waktu, harga yang terjangkau, dan reputasi yang dapat diandalkan.</p>
            <a href="contact.php" class="btn">contact us</a>
        </div>

        <div class="image">
            <img src="images/about-img-2.jpg" alt="">
        </div>

    </div>

    <div class="flex">

        <div class="image">
            <img src="images/about-img-3.jpg" alt="">
        </div>

        <div class="content">
            <h3>who we are?</h3>
            <p>Kami adalah toko bunga yang berkomitmen untuk menyediakan pengalaman berbelanja bunga yang memuaskan dengan produk berkualitas tinggi, pilihan yang beragam, dan layanan yang terbaik.</p>
            <a href="#reviews" class="btn">clients reviews</a>
        </div>

    </div>

</section>

<section class="reviews" id="reviews">

    <h1 class="title"><span>client's reviews</span></h1>

    <div class="box-container">

        <div class="box">
            <img src="images/org1.jpg" alt="">
            <p>"Setelah menggunakan layanan toko bunga Anda, saya merasa perlu perhatian lebih terhadap kebersihan dan presentasi rangkaian, variasi pilihan bunga perlu diperbanyak, dan informasi pengiriman harus ditingkatkan. Dengan perbaikan ini, toko bunga Anda bisa menjadi pilihan yang lebih baik bagi pelanggan."</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>daenk bacho</h3>
        </div>

        <div class="box">
            <img src="images/org2.jpg" alt="">
            <p>"Saya ingin memberikan kritik dan saran terkait pengalaman berbelanja di toko bunga Anda. Harga produk agak tinggi dibandingkan toko sejenis; pertimbangkan peninjauan kebijakan harga. Saya harap ada opsi pengiriman lebih fleksibel, seperti pengiriman hari yang sama atau di luar jam kerja. Informasi tentang jenis bunga dan perawatannya perlu ditingkatkan. Terima kasih, saya yakin dengan perbaikan ini, toko Anda akan semakin diminati."</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </div>
            <h3>akmal yegger</h3>
        </div>

        <div class="box">
            <img src="images/org3.jpg" alt="">
            <p>"Saya ingin memberikan kritik dan saran terkait pengalaman berbelanja di toko bunga Anda. Ketersediaan stok bunga seringkali kurang konsisten, mungkin perlu meningkatkan manajemen persediaan. Layanan pelanggan juga perlu ditingkatkan untuk meningkatkan responsivitas. Mungkin juga berguna jika toko Anda menawarkan program loyalitas atau diskon reguler kepada pelanggan tetap. Terima kasih, saya yakin dengan perbaikan ini, pengalaman berbelanja di toko bunga Anda akan menjadi lebih memuaskan."</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </div>
            <h3>yesreal</h3>
        </div>

        <div class="box">
            <img src="images/org4.jpg" alt="">
            <p>"Sangat puas dengan pengalaman berbelanja di toko bunga ini. Produk selalu segar dan indah, layanan pelanggan ramah dan responsif, dan pengiriman tepat waktu. Satu-satunya kelemahan adalah pilihan bunga yang terbatas. Tetap sangat direkomendasikan."</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>john kandolo</h3>
        </div>

        <div class="box">
            <img src="images/org5.jpg" alt="">
            <p>"Saya memberikan rating empat bintang untuk toko bunga ini. Produk berkualitas tinggi dan layanan pelanggan yang ramah. Pengiriman tepat waktu. Satu-satunya saran adalah meningkatkan informasi tentang jenis bunga di situs web mereka. Tetap direkomendasikan."</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </div>
            <h3>taufiq suwandi</h3>
        </div>

        <div class="box">
            <img src="images/cantik6.jpg" alt="">
            <p>"Saya memberikan rating lima bintang setengah untuk toko bunga ini. Pengalaman berbelanja luar biasa dengan produk segar dan berkualitas tinggi, serta pilihan desain yang mengesankan. Layanan pelanggan yang ramah dan responsif, dengan pengiriman tepat waktu. Satu-satunya saran adalah meningkatkan informasi perawatan bunga. Sangat direkomendasikan untuk pengalaman berbelanja yang memuaskan dan produk berkualitas tinggi."</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </div>
            <h3>allyya nur azizah</h3>
        </div>

    </div>

</section>











<?php @include 'footer.php'; ?>

<script src="js/script.js"></script>

</body>
</html>