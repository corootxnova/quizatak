<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QUIZATAK</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/index.css">
</head>
<body>
<!-- Start Coding -->
<nav class="navbar navbar-expand-lg navbar-dark light fixed-top" dir="rtl">
    <a class="navbar-brand" href="#">QUIZATAK</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
      aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    </button>
</nav>
<header class="page-header"><div class="cover">
    <br><br><br><br><br><br><br><br><br><br><br><br>
    <h1 class="text-header">QUIZATAK</h1>
    <p class="text-desc"><i class="far fa-grin-tears"></i> اختبارات عشوائية غرضها المرح بين الناس فقط <i class="far fa-grin-tears"></i></p>
</div></header>
<center><section class="quizes">

    <!-- First Quiz -->
    <div class="quiz-text">
        <img src="media/box/news.jpg" alt="">
        <p dir="rtl">اكتشف الان ماذا تقول عنك الجرائد !</p>
        <a href="news-reload.php"><button class="btn blue-gradient">إبدأ الاختبار</button></a>
    </div>

    <!-- Second Quiz -->
    <div class="quiz-text">
        <img src="media/box/fut.jpg" alt="">
        <p dir="rtl">اكتشف حياتك كيف تبدوا بعد 10 سنوات</p>
        <a href="fut-reload.php"><button class="btn blue-gradient">إبدأ الاختبار</button></a>
    </div>

</section></center>
<footer class="page-footer font-small blue fixed-bottom">
    <div class="footer-copyright text-center py-3">
      © <?php echo date("Y") ?> COPYRIGHT : <a href="https://www.facebook.com/AbdelrahmanAbouldahabOfficial/"> Abdelrahman Abouldahab</a>
    </div>
</footer>
<!--- End Coding --->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js"></script>
</body>
</html>