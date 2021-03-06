<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>რითმა</title>
	
    <!-- css -->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
	<link href="css/animate.css" rel="stylesheet" />
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/myStyle.css">

	<!-- template skin -->
	<link id="t-colors" href="color/default.css" rel="stylesheet">


</head>

<body id="page-top">


<div id="wrapper">
	
    <nav class="navbar navbar-custom" role="navigation">
        <div class="container navigation">
		
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="index.php">
                    <img src="img/logo.png" alt="" width="150" height="40" />
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
			  <ul class="nav navbar-nav">
				<li><div id="cart"></div></li>
				<li><a href="index.php">მთავარი</a></li>
				<li class="active"><a href="addWord.php">დაამატეთ სიტყვა<span class="label label-danger"></span></a> </li>

			  </ul>
            </div>
            <!-- /.navbar-collapse -->

        </div>
        <!-- /.container -->
    </nav>
	
	
	<section id="callaction" class="home-section paddingtop-40">
		<p align="center">გახადე საიტი უკეთესი! დაამატე სიტყვა რითმების ონლაინ ბაზაში და იქეცი პოეტების შთაგონების ირიბ წყაროდ!</p>
		<form method="post">	
           <input id="searchRhyme" type="text" name="newWord">
           <input id="searchButton" type="submit" name="submit" value="დამატება">
        </form>
	</section>
	<?php
		require_once 'functions.php';

		if(isset($_POST["newWord"]) && !empty($_POST["newWord"])){
			$testWord = $_POST["newWord"]; 
			addNewWord("sql111.tt-hosting.ga", "tths_22289711", "59991234", "tths_22289711_ritma", $testWord);
			//addNewWord("localhost", "root", "", "ritma", $testWord);
		}
	?>	
	<footer>
		<div class="sub-footer">
		<div class="container">
			<div class="row">
				<div class="col-sm-6 col-md-6 col-lg-6">
					<ul class="social">
						<li><a href="#"><i class="fa fa-facebook"></i></a></li>
					</ul>
				
					<div class="wow fadeInLeft" data-wow-delay="0.1s">
					<div class="text-left">
					<p>&copy;Copyright 2018 - Guga Nemsitsveridze.</p>
					</div>
					</div>
				</div>
				<div class="col-sm-6 col-md-6 col-lg-6">
					<div class="wow fadeInRight" data-wow-delay="0.1s">
					<div class="text-right margintop-30">
                        <!-- 
                            All links in the footer should remain intact. 
                            Licenseing information is available at: http://bootstraptaste.com/license/
                            You can buy this theme without footer links online at: http://bootstraptaste.com/buy/?theme=Appland
                        -->
					</div>
					</div>
				</div>
			</div>	
		</div>
		</div>
	</footer>

</div>
<a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>

	<!-- Core JavaScript Files -->
    <script src="js/jquery.min.js"></script>	 
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.easing.min.js"></script>
	<script src="js/wow.min.js"></script>
	<script src="js/jquery.scrollTo.js"></script>
	<script src="js/nivo-lightbox.min.js"></script>
    <script src="js/custom.js"></script>


</body>

</html>
