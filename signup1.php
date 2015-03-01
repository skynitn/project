<!doctype html>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!-- Consider adding an manifest.appcache: h5bp.com/d/Offline -->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
  <meta charset="utf-8">

  <!-- Use the .htaccess and remove these lines to avoid edge case issues.
       More info: h5bp.com/b/378 -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

  <title>Sign Up</title>
  <meta name="description" content="">
  <meta name="author" content="">

  <!-- Mobile viewport optimized: j.mp/bplateviewport -->
  <meta name="viewport" content="width=device-width,initial-scale=1">

  <!-- Place favicon.ico and apple-touch-icon.png in the root directory: mathiasbynens.be/notes/touch-icons -->

  <!-- CSS: implied media=all -->
  <!-- CSS concatenated and minified via ant build script-->
  
  <link rel="stylesheet" href="css/bootstrap.css" />
  <link rel="stylesheet" href="css/bootstrap.min.css" />
  <link rel="stylesheet" href="css/bootstrap-theme.css" />
  <link rel="stylesheet" href="css/bootstrap-theme.min.css" />
  <link rel="stylesheet" href="css/bootstrap-theme.css.map" />
  <link rel="stylesheet" href="css/bootstrap.css.map" />
  <link rel="stylesheet" href="css/bootstrap-responsive.css">
  <link rel="stylesheet" href="css/style.css">
  <!-- end CSS-->

  <!-- More ideas for your <head> here: h5bp.com/d/head-Tips -->

  <!-- All JavaScript at the bottom, except for Modernizr / Respond.
       Modernizr enables HTML5 elements & feature detects; Respond is a polyfill for min/max-width CSS3 Media Queries
       For optimal performance, use a custom Modernizr build: www.modernizr.com/download/ -->
  <script src="js/libs/modernizr-2.0.6.min.js"></script>
  <script src="js/bootstrap.js"></script>
  <script src="js/bootstrap.min.js"></script>
</head>

<body>
    <header>
    </header>
    <div class="container">
    	<div class="row-fluid">
    	<form action="signup2.php" method="post" >					
		<table class="table table-striped">
			<tbody><tr>
				<td>Date Added</td>
				<td>
					<div class="col-lg-6">
					<input name="dateAdded" class="form-control" placeholder="Date Added" required="" class="datepicker hasDatepicker" type="date">
					</div>
				</td>
			</tr>
			
			<tr>
				<td>Company Name</td>
				<td>
					<div class="col-lg-6">
					<input name="companyName" class="form-control" placeholder="Company Name" required="" type="text">
					</div>					
				</td>
			</tr>
			
			<tr>
				<td>Client Name</td>
				<td>
					<div class="col-lg-6">
					<input name="clientName" class="form-control" placeholder="Client Name" required="" type="text">
					</div>
				</td>
			</tr>
			
			<tr>
				<td>Email</td>
				<td>
					<div class="col-lg-6">
					<input name="email" class="form-control" placeholder="Email" required="" type="email">
					</div>					
				</td>
			</tr>
			<tr>
				<td>Password</td>
				<td>
					<div class="col-lg-6">
					<input name="password" class="form-control" placeholder="Password" required="" type="password">
					</div>
				</td>
			</tr>
			
			<td>Country</td>
				<td>
					<div class="col-lg-6">
					<input name="country" class="form-control" placeholder="Country" required="" type="text">
					</div>
				</td>
			</tr>
			
			<tr>
				<td>State</td>
				<td>
					<div class="col-lg-6">
					<input name="state" class="form-control" placeholder="State" required="" type="text">
					</div>					
				</td>
			</tr>
			
			<tr>
				<td>City</td>
				<td>
					<div class="col-lg-6">
					<input name="city" class="form-control" placeholder="City" required="" type="text">
					</div>
				</td>
			</tr>
			
			<tr>
				<td>Zip Code</td>
				<td>
					<div class="col-lg-6">
					<input name="zip" class="form-control" placeholder="Zip Code" required="" type="text">
					</div>					
				</td>
			</tr>
			<tr>
				<td>Street Address</td>
				<td>
					<div class="col-lg-6">
					<textarea name="sAddr" placeholder="Street Address" class="form-control" rows="3"></textarea>
					</div>
				</td>
			</tr>
							
			</tbody>
			</table>
			<div class="modal-footer"><input value="Next Step" class="btn btn-primary pull-right" type="submit"></div>
		</form>
		</div>	
    <footer>

    </footer>
  </div> <!--! end of #container -->


  
  
  <!-- JavaScript at the bottom for fast page loading -->

  <!-- Grab Google CDN's jQuery, with a protocol relative URL; fall back to local if offline -->
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="js/libs/jquery-1.6.2.min.js"><\/script>')</script>


  <!-- scripts concatenated and minified via ant build script-->
  <script defer src="js/plugins.js"></script>
  <script defer src="js/script.js"></script>
  <!-- end scripts-->

	
  <!-- Change UA-XXXXX-X to be your site's ID -->
  <script>
    window._gaq = [['_setAccount','UAXXXXXXXX1'],['_trackPageview'],['_trackPageLoadTime']];
    Modernizr.load({
      load: ('https:' == location.protocol ? '//ssl' : '//www') + '.google-analytics.com/ga.js'
    });
  </script>


  <!-- Prompt IE 6 users to install Chrome Frame. Remove this if you want to support IE 6.
       chromium.org/developers/how-tos/chrome-frame-getting-started -->
  <!--[if lt IE 7 ]>
    <script src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js"></script>
    <script>window.attachEvent('onload',function(){CFInstall.check({mode:'overlay'})})</script>
  <![endif]-->
  
</body>
</html>



