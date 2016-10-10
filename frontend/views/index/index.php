<?php
use yii\helpers\Html;

?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
    <head>
      <meta charset="<?= Yii::$app->charset ?>">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title><?= Html::encode($SEO->title) ?></title>
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
          <nav>
            <div class="container-fluid">
              <div class="row">
                <div class="col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2 col-xs-8 col-xs-offset-2">
                  <nav class="pull">
                    <ul class="top-nav">
                      <li><a href="#intro">Introduction <span class="indicator"><i class="fa fa-angle-right"></i></span></a></li>
                      <li><a href="#features">Features <span class="indicator"><i class="fa fa-angle-right"></i></span></a></li>
                      <li><a href="#responsive">Responsive Design <span class="indicator"><i class="fa fa-angle-right"></i></span></a></li>
                      <li><a href="#portfolio">Portfolio <span class="indicator"><i class="fa fa-angle-right"></i></span></a></li>
                      <li><a href="#team">Team <span class="indicator"><i class="fa fa-angle-right"></i></span></a></li>
                      <li><a href="#contact">Get in Touch <span class="indicator"><i class="fa fa-angle-right"></i></span></a></li>
                    </ul>
                  </nav>
                </div>
              </div>
            </div>
          </nav>
          <section class="hero" id="hero">
            <div class="container">
              <div class="row">
                <div class="col-md-12 text-right navicon">
                  <a id="nav-toggle" class="nav_slide_button" href="#"><span></span></a>
                </div>
              </div>
              <div class="row">
                <div class="col-md-8 col-md-offset-2 text-center inner">
                  <h1 class="animated fadeInDown"><?= HTML::encode($SEO->name) ?></h1>
                  <p class="animated fadeInUp delay-05s"><?= HTML::encode($ALL_POST[1]->description) ?></p>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6 col-md-offset-3 text-center">
                  <a href="#" class="learn-more-btn">Back to the article</a>
                </div>
              </div>
            </div>
          </section>
        </header>
        <section class="intro text-center section-padding" id="intro">
          <div class="container">
            <div class="row">
              <div class="col-md-8 col-md-offset-2 wp1">
                <h1 class="arrow"><?= HTML::encode($ALL_POST[2]->title) ?></h1>
                <p><?= HTML::encode($ALL_POST[2]->description) ?></p>
              </div>
            </div>
          </div>
        </section>
        <div class="copyrights">Collect from <a href="http://www.cssmoban.com/"  title="网站模板">网站模板</a></div>
        <section class="features text-center section-padding" id="features">
          <div class="container">
            <div class="row">
              <div class="col-md-12">
                <h1 class="arrow"><?= HTML::encode($ALL_POST[3]->title) ?></h1>
                <div class="features-wrapper">
                  <div class="col-md-4 wp2">
                    <div class="icon">
                      <i class="fa fa-laptop shadow"></i>
                    </div>
                    <h2><?= HTML::encode($ALL_POST_LIST[3][0]->title) ?></h2>
                    <p><?= HTML::encode($ALL_POST_LIST[3][0]->description) ?>.</p>
                  </div>
                  <div class="col-md-4 wp2 delay-05s">
                    <div class="icon">
                      <i class="fa fa-code shadow"></i>
                    </div>
                    <h2><?= HTML::encode($ALL_POST_LIST[3][1]->title) ?></h2>
                    <p><?= HTML::encode($ALL_POST_LIST[3][1]->description) ?>.</p>
                  </div>
                  <div class="col-md-4 wp2 delay-1s">
                    <div class="icon">
                      <i class="fa fa-heart shadow"></i>
                    </div>
                    <h2><?= HTML::encode($ALL_POST_LIST[3][2]->title) ?></h2>
                    <p><?= HTML::encode($ALL_POST_LIST[3][2]->description) ?>.</p>
                  </div>
                  <div class="clearfix"></div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <section class="text-center" id="responsive">
          <div class="container-fluid nopadding responsive-services">
            <div class="wrapper">
              <div class="iphone">
                <div class="wp3"></div>
              </div>
              <div class="fluid-white"></div>
            </div>
            <div class="container designs">
              <div class="row">
                <div class="col-md-5 col-md-offset-7">
                  <div id="servicesSlider">
                    <ul class="slides">
                      <li>
                        <h1 class="arrow"><?= HTML::encode($ALL_POST_LIST[4][0]->title) ?></h1>
                        <p> <?= HTML::encode($ALL_POST_LIST[4][0]->description) ?> </p>
                      </li>
                      <li>
                        <h1 class="arrow"><?= HTML::encode($ALL_POST_LIST[4][1]->title) ?></h1>
                        <p> <?= HTML::encode($ALL_POST_LIST[4][1]->description) ?> </p>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <section class="swag text-center">
          <div class="container">
            <div class="row">
              <div class="col-md-8 col-md-offset-2">
                <h1><?= HTML::encode($ALL_POST[5]->title) ?><span><em><?= HTML::encode($ALL_POST[5]->description) ?></em></span></h1>
                <a href="#portfolio" class="down-arrow-btn"><i class="fa fa-chevron-down"></i></a>
              </div>
            </div>
          </div>
        </section>
        <section class="portfolio text-center section-padding" id="portfolio">
          <div class="container">
            <div class="row">
              <div id="portfolioSlider">
                <ul class="slides">

                  <li>

                    <?php foreach ($ALL_NEWS[1] as $value) { ?>
                    
                    <div class="col-md-4 wp4">
                      <div class="overlay-effect effects clearfix">
                        <div class="img">
                          <img src="<?= HTML::encode($value->pic)?>" alt="Portfolio Item">
                          <div class="overlay">
                            <a href="/index.php/index/content?id=<?= HTML::encode($value->id)?>" class="expand"><i class="fa fa-search"></i><br>VIEW</a>
                            <a class="close-overlay hidden">x</a>
                          </div>
                        </div>
                      </div>
                      <h2><?= HTML::encode($value->title)?></h2>
                      <p><?= HTML::encode($value->description)?></p>
                    </div>

                    <?php } ?>

                  </li>


                </ul>
              </div>
            </div>
          </div>
        </section>
        <div class="ignite-cta text-center">
          <div class="container">
            <div class="row">
              <div class="col-md-12">
                <a href="#" class="ignite-btn">Ignite Your Passion</a>
              </div>
            </div>
          </div>
        </div>
        <section class="team text-center section-padding" id="team">
          <div class="container">
            <div class="row">
              <div class="col-md-12">
                <h1 class="arrow">We're a team that adore what we do</h1>
              </div>
            </div>
            <div class="row">
              <div class="team-wrapper">
                <div id="teamSlider">
                  <ul class="slides">

                    <li>

                      <div class="col-md-4 wp5">
                        <img src="<?= HTML::encode($ALL_NEWS[2][0]->pic)?>" alt="<?= HTML::encode($ALL_NEWS[2][0]->title)?>">
                        <h2><?= HTML::encode($ALL_NEWS[2][0]->title)?></h2>
                        <p><?= HTML::encode($ALL_NEWS[2][0]->description)?>.</p>
                        <div class="social">
                          <ul class="social-buttons">
                            <li><a href="/index.php/index/content?id=<?= HTML::encode($ALL_NEWS[2][0]->id)?>" class="social-btn"><i class="fa fa-dribbble"></i></a></li>
                            <li><a href="/index.php/index/content?id=<?= HTML::encode($ALL_NEWS[2][0]->id)?>" class="social-btn"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="/index.php/index/content?id=<?= HTML::encode($ALL_NEWS[2][0]->id)?>" class="social-btn"><i class="fa fa-envelope"></i></a></li>
                          </ul>
                        </div>
                      </div>
                      
                      <div class="col-md-4 wp5 delay-05s">
                        <img src="<?= HTML::encode($ALL_NEWS[2][1]->pic)?>" alt="<?= HTML::encode($ALL_NEWS[2][1]->title)?>">
                        <h2><?= HTML::encode($ALL_NEWS[2][1]->title)?></h2>
                        <p><?= HTML::encode($ALL_NEWS[2][1]->description)?>.</p>
                        <div class="social">
                          <ul class="social-buttons">
                            <li><a href="/index.php/index/content?id=<?= HTML::encode($ALL_NEWS[2][1]->id)?>" class="social-btn"><i class="fa fa-dribbble"></i></a></li>
                            <li><a href="/index.php/index/content?id=<?= HTML::encode($ALL_NEWS[2][1]->id)?>" class="social-btn"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="/index.php/index/content?id=<?= HTML::encode($ALL_NEWS[2][1]->id)?>" class="social-btn"><i class="fa fa-envelope"></i></a></li>
                          </ul>
                        </div>
                      </div>

                      <div class="col-md-4 wp5 delay-1s">
                        <img src="<?= HTML::encode($ALL_NEWS[2][2]->pic)?>" alt="<?= HTML::encode($ALL_NEWS[2][2]->title)?>">
                        <h2><?= HTML::encode($ALL_NEWS[2][2]->title)?></h2>
                        <p><?= HTML::encode($ALL_NEWS[2][2]->description)?>.</p>
                        <div class="social">
                          <ul class="social-buttons">
                            <li><a href="/index.php/index/content?id=<?= HTML::encode($ALL_NEWS[2][2]->id)?>" class="social-btn"><i class="fa fa-dribbble"></i></a></li>
                            <li><a href="/index.php/index/content?id=<?= HTML::encode($ALL_NEWS[2][2]->id)?>" class="social-btn"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="/index.php/index/content?id=<?= HTML::encode($ALL_NEWS[2][2]->id)?>" class="social-btn"><i class="fa fa-envelope"></i></a></li>
                          </ul>
                        </div>
                      </div>

                    </li>

                  </ul>
                </div>
              </div>
            </div>
          </div>
        </section>
        <section class="subscribe text-center">
          <div class="container">
            <h1><i class="fa fa-paper-plane"></i><span>Subscribe to stay in the loop</span></h1>
            <form action="#">
              <input type="text" name="" value="" placeholder="" required>
              <input type="submit" name="" value="Send">
            </form>
          </div>
        </section>
        <section class="dark-bg text-center section-padding contact-wrap" id="contact">
          <a href="#top" class="up-btn"><i class="fa fa-chevron-up"></i></a>
          <div class="container">
            <div class="row">
              <div class="col-md-12">
                <h1 class="arrow">Drop us a line</h1>
              </div>
            </div>
            <div class="row contact-details">
              <div class="col-md-4">
                <div class="light-box box-hover">
                  <h2><i class="fa fa-map-marker"></i><span>Address</span></h2>
                  <p><?= Html::encode($SEO->address) ?></p>
                </div>
              </div>
              <div class="col-md-4">
                <div class="light-box box-hover">
                  <h2><i class="fa fa-mobile"></i><span>Phone</span></h2>
                  <p><?= Html::encode($SEO->phone) ?></p>
                </div>
              </div>
              <div class="col-md-4">
                <div class="light-box box-hover">
                  <h2><i class="fa fa-paper-plane"></i><span>Email</span></h2>
                  <p><a href="#"><?= Html::encode($SEO->email) ?></a></p>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <ul class="social-buttons">
                  <li><a href="#" class="social-btn"><i class="fa fa-dribbble"></i></a></li>
                  <li><a href="#" class="social-btn"><i class="fa fa-twitter"></i></a></li>
                  <li><a href="#" class="social-btn"><i class="fa fa-envelope"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
        </section>
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
        <script src="/temp/js/scripts.js"></script>
        <script src="/temp/js/jquery.flexslider.js"></script>
        <script src="/temp/js/modernizr.js"></script>
    </body>
</html>