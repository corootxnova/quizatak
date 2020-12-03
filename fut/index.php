<?php
    $rsl = array(
        "حياتك ستصبح سعيده"
        ,"حياتك ستصبح سعيده لدرجه انك لا تعلم من اين تأتي لك السعاده"
        ,"حياتك لا تبدو سعيدة"
        ,"ستصبح اغني شخص"
        ,"ستصبح متزوج ولديك 7 اطفال"
        ,"ستصبح رجل اعمال تملك العديد من السركات في دبي"
        ,"ستفقد جميع ثرواتك بسبب تصرف خاطئ"
        ,"ستصبح متزوجا من اغني امرأه في العالم"
        ,"ستصبح رئيس عملك الحالي اذا كنت تعمل"
        ,"ستصبح غنياً لدرجة غير متوقعة"
        ,"ستصبح عاطلا من عملك"
        ,"ستصبح مخرج لفيلم لأفصل فيلم اكشن"
        ,"ستفقد كل اموالك علي الخمر والنساء"
        ,"سوف تصبح سارقا كبيرا"
     );
    $shf = shuffle($rsl);
?>
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
<center>
    <div class="result">
        <img src="../media/box/result.jpg" alt="">
        <a href="index.php"><button class="btn peach-gradient show" id="show">اظهار نتيجة اخرى</button></a>
        <p class="res"><?php echo $rsl[2]; ?></p>
    </div>
</center>
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