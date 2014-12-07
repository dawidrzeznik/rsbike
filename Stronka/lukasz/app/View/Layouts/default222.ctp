<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="shortcut icon" href="../../docs-assets/ico/favicon.png">
        <title>Jumbotron Template for Bootstrap</title>
        <!-- Bootstrap core CSS -->
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/social-buttons.css" rel="stylesheet">
        <link href="css/social-buttons3.css" rel="stylesheet">
        <link href="css/social-buttons3.css" rel="stylesheet">
        <link href="css/font-awesome.css" rel="stylesheet">
        <link href="css/font-awesome.mini.css" rel="stylesheet">
        <!-- Custom styles for this template -->
        <link href="mycss.css" rel="stylesheet">
        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
	<?php
		echo $this->Html->meta('icon');

		echo $this->Html->css('bootstrap');
		echo $this->Html->css('social-buttons');
		echo $this->Html->css('social-buttons3');
		echo $this->Html->css('font-awesome');
		echo $this->Html->css('font-awesome.mini');


		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
		
	?>
    </head>
    <body class="">
        <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="navbar-collapse collapse">
                    <form class="navbar-form navbar-right" role="form">
                        <div class="form-group">
                            <input type="text" placeholder="Email" class="form-control">
                        </div>
                        <div class="form-group">
                            <input type="password" placeholder="Password" class="form-control toolbar-marginesy">
                        </div>
                        <button type="button" class="btn btn-default btn-info toolbar-marginesy">Zaloguj</button>
                        <button href="http://localhost/cakePHP/users/add" type="submit" class="btn btn-success toolbar-marginesy">Zarejestruj</button>
                    </form>
                    <ul class="nav nav-tabs">
                        <li class="active">
                            <a href="#">Strona główna</a>
                        </li>
                        <li>
                            <a href="#">Profil</a>
                        </li>
                        <li>
                            <a href="#">Oferta</a>
                        </li>
                        <li>
                            <a href="#">Kontakt</a>
                        </li>
                    </ul>
                </div>
                <!--/.navbar-collapse -->
            </div>
        </div>
        <div id="carousel1" class="carousel slide kolumny-marginesy wymiar-slajdy" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#carousel1" data-slide-to="0" class="active"></li>
                <li data-target="#carousel1" data-slide-to="1"></li>
                <li data-target="#carousel1" data-slide-to="2"></li>
            </ol>
            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                <div class="item active">
                    <img src="img/Hero-1-2000x500.jpg" alt=""/>
                    <div class="carousel-caption">
                        <h3>Slide 1 title</h3>
                        <p>Slide 1 description.</p>
                    </div>
                </div>
                <div class="item">
                    <img src="img/image_thumb_abcweb.jpg" alt=""/>
                    <div class="carousel-caption">
                        <h3>Slide 2 title</h3>
                        <p>Slide 2 description.</p>
                    </div>
                </div>
                <div class="item">
                    <img src="img/slider-bike.jpg" alt=""/>
                    <div class="carousel-caption">
                        <h3>Slide 3 title</h3>
                        <p>Slide 3 description.</p>
                    </div>
                </div>
            </div>
            <!-- Controls -->
            <a class="left carousel-control" href="#carousel1" data-slide="prev"></a>
            <a class="right carousel-control" href="#carousel1" data-slide="next"></a>
        </div>
        <div class="container text-wymiary kolumny-marginesy">
            <div class="container pg-empty-placeholder">
						  <?php echo $this->Session->flash(); ?>

							<?php echo $this->fetch('content'); ?>
			</div>
            <div class="row kolumny-marginesy text-wymiary toolbar-marginesy"></div>
            <hr/>
                <hr/>
                    <ul class="social-icons squares wymiary-social social-wymiary list-color">
                        <div class="col-md-4 lukasz-wymiar">
                            <h6><i>2014 Łukasz Skiba</i></h6>
                        </div>
                        <div class="col-md-4">
                            <h3>Kontakt</h3>
                            <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                        </div>
                        <li class="tab socialiscon-wymiary">
                            <a href="#"><i class="fa fa-facebook square social-icon-wymiar"></i><span class="screen-reader">Facebook</span></a>
                        </li>
                        <li class="tab socialiscon-wymiary">
                            <a href="#"><i class="fa fa-twitter square"></i><span class="screen-reader">Twitter</span></a>
                        </li>
                        <li class="tab socialiscon-wymiary">
                            <a href="#"><i class="fa fa-google-plus square"></i><span class="screen-reader">Google+</span></a>
                        </li>
                        <li class="tab socialiscon-wymiary">
                            <a href="#"><i class="fa fa-linkedin square"></i><span class="screen-reader">LinkedIn</span></a>
                        </li>
                    </ul>
        </div>
        <!-- Main jumbotron for a primary marketing message or call to action -->
        <!-- /container -->
        <!-- Bootstrap core JavaScript
    ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
		  	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
  	<script src="//netdna.bootstrapcdn.com/3.0.0/js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="//netdna.bootstrapcdn.com/3.0.0/css/bootstrap.min.css">
        <script src="assets/js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
        <script src="assets/js/ie10-viewport-bug-workaround.js"></script>
    </body>
</html>