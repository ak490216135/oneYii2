<?php
use yii\helpers\Html;

?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
    <head>
      <meta charset="<?= Yii::$app->charset ?>">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title><?= Html::encode($SEO->title) ?> - <?= Html::encode($PAGE->title) ?></title>
      <meta name="keywords" content="<?= Html::encode($SEO->keywords) ?>"/>
      <meta name="description" content="<?= Html::encode($SEO->description) ?>"/>
      <link href="/temp/css/bootstrap.min.css" rel="stylesheet">
      <link href="/temp/css/font-awesome.min.css" rel="stylesheet">
      <link href="/temp/css/flexslider.css" rel="stylesheet" >
      <link href="/temp/css/styles.css" rel="stylesheet">
      <link href="/temp/css/queries.css" rel="stylesheet">
      <link href="/temp/css/animate.css" rel="stylesheet">
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body id="top">

        <header id="home">
          <section class="hero" id="hero" style="padding: 50px 0 50px 0;">
            <div class="container">
              <div class="row">
                <div class="col-md-12 text-right navicon">
                  <a id="nav-toggle" class="nav_slide_button" href="/"><span></span></a>
                </div>
              </div>
              <div class="row">
                <div class="col-md-8 col-md-offset-2 text-center inner" style="padding-top: 30px;">
                  <h1 class="animated fadeInDown"><?= HTML::encode($SEO->name) ?></h1>
                  <p class="animated fadeInUp delay-05s"><?= HTML::encode($ALL_POST[1]->description) ?></p>
                </div>
              </div>
            </div>
          </section>
        </header>

        <div class="container" style="margin-top: 30px;margin-bottom: 30px;">
          <div class="row">
            <div class="col-md-12 col-lg-12 ">
              <h1 style="margin-top: 0;"><?= HTML::encode($PAGE->title) ?></h1>
              <div>
                <?= HTML::encode($PAGE->content) ?>
              </div>
            </div>
          </div>
        </div>

        <footer>
          <div class="container">
            <div class="row">
              <div class="col-md-6">
                <ul class="legals">
                  <li><a href="#">Terms &amp; Conditions</a></li>
                  <li><a href="#">Legals</a></li>
                </ul>
              </div>
              <div class="col-md-6 credit">
                <p> <a href="#" target="_blank" title="<?= Html::encode($SEO->title) ?>"><?= Html::encode($SEO->email) ?></a> </p>
              </div>
            </div>
          </div>
        </footer>

        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="/temp/js/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="/temp/js/waypoints.min.js"></script>
        <script src="/temp/js/bootstrap.min.js"></script>
        <!-- <script src="/temp/js/scripts.js"></script> -->
        <script src="/temp/js/jquery.flexslider.js"></script>
        <script src="/temp/js/modernizr.js"></script>
    </body>
</html>