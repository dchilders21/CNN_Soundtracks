<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport"    content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author"      content="">

	<title>CNN Soundtracks</title>

	<link rel="shortcut icon" href="images/CNN_Favicon.png">

	<!-- Bootstrap itself -->
	<link href="http://netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet" type="text/css">

	<!-- Custom styles -->
	<link rel="stylesheet" href="css/main.css">
	<link rel="stylesheet" type="text/css" href="css/timeline.css">
	<link rel="stylesheet" type="text/css" href="css/lightcase.css">
	<link rel="stylesheet" type="text/css" href="css/jquery.jscrollpane.css">

	<style>
		.scroll-pane
		{
			width: 100%;
			height: 200px;
			overflow: auto;
		}
	</style>

</head>

<!-- use "theme-invert" class on bright backgrounds, also try "text-shadows" class -->
<body class="theme-invert">

	<nav class="navbar navbar-default">
	<div class="container-fluid">

		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			<ul class="nav navbar-nav">
				<li class="active"><a href="#">TIMELINE <span class="sr-only">(current)</span></a></li>
				<li><a href="#">ABOUT</a></li>
				<li><a href="map.html">MAP</a></li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">ALL EPISODES <span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="#">EPISODES 1</a></li>
						<li><a href="#">EPISODES 2</a></li>
						<li><a href="#">EPISODES 3</a></li>
						<!-- <li role="separator" class="divider"></li> -->
						<li><a href="#">EPISODES 4</a></li>
						<!-- <li role="separator" class="divider"></li> -->
						<li><a href="#">EPISODES 5</a></li>
						<li><a href="#">EPISODES 6</a></li>
						<li><a href="#">EPISODES 7</a></li>
						<li><a href="#">EPISODES 8</a></li>
					</ul>
				</li>
			</ul>

		</div><!-- /.navbar-collapse -->
	</div><!-- /.container-fluid -->
	</nav>


<!-- Main (Home) section -->
<section class="section" id="head">
	<div class="container">

		<div class="row">
			
			<div class="col-md-10 col-lg-10 col-md-offset-1 col-lg-offset-1 text-center">
				<?php echo '<p>Written in PHP</p>' ?>
				<?php echo '<iframe id="targetFrame" onload="ShowAlert();" src="http://podcasts.cnn.net/embed/single/skin/dxhznz/morgan-stanleys-carla.html" width="100%" height="175" style="border:none;" scrolling="no"></iframe>' ?>
				<!-- <iframe src="http://podcasts.cnn.net/embed/single/skin/dxhznz/morgan-stanleys-carla.html" width="100%" height="175" style="border:none;" scrolling="no"></iframe> -->
			</div> <!-- /col -->
			
		</div> <!-- /row -->

	</div>
</section>


<!-- Load js libs only when the page is loaded. -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
<script src="js/modernizr.custom.72241.js"></script>
<script type="text/javascript" src="js/jscrollpane/jquery.mousewheel.js"></script>
<script type="text/javascript" src="js/jscrollpane/jquery.jscrollpane.js"></script>
<script type="text/javascript" src="js/jscrollpane/mwheelIntent.js"></script>
<!-- Custom template scripts -->
<script src="js/magister.js"></script>
<script src="js/lightcase.js"></script>
<script>	
		function ShowAlert(){
		    console.log('Content Loaded');
		    var x = document.getElementById("targetFrame");
			var y = (x.contentWindow || x.contentDocument);
			if (y.document)y = y.document;
			console.log(y);
		}
	jQuery(document).ready(function($) {
		$('a[data-rel^=lightcase]').lightcase();

		

		/*$("#targetFrame").load(function(){
			console.log(' ========= ');
			console.log($("iframe").contents())
		});*/

		/*document.getElementById('targetFrame').contentWindow.onload = function() {
		    console.log('content loaded');
		}*/

	});

	$(function()
	{
		$('.scroll-pane').jScrollPane(
			{
				verticalDragMinHeight: 168,
				verticalDragMaxHeight: 168,
				horizontalDragMinWidth: 88,
				horizontalDragMaxWidth: 88
			});
	});
</script>
</body>
</html>
