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
    	<form action="signup.php" method="post" >
    	<?php
			$form = $_POST;
			//print_r($form);
			foreach ($form as $key => $value) {
				if($key == "password"){
					$epass = md5($value);
					echo "<input type='hidden' name='$key' value='$epass' />";
				}
				else{
					echo "<input type='hidden' name='$key' value='$value' />";
				}
			}
		?>
			
		<table class="table table-striped">
			<tbody>
			<tr>
				<td>Tel No</td>
				<td>
					<div class="col-lg-6">
					<input name="telNo" class="form-control" placeholder="Tel No" required="" type="text">
					</div>
				</td>
			</tr>
			<tr>
				<td>Alternate Tel No</td>
				<td>
					<div class="col-lg-6">
					<input name="aTelNo" class="form-control" placeholder="Alternate Tel No" required="" type="text">
					</div>
				</td>
			</tr>
			<tr>
				<td>Mobile No</td>
				<td>
					<div class="col-lg-6">
					<input name="mobileNo" class="form-control" placeholder="Mobile No" required="" type="text">
					</div>
				</td>
			</tr>
			<tr>
				<td>Fax No</td>
				<td>
					<div class="col-lg-6">
					<input name="faxNo" class="form-control" placeholder="Fax No" required="" type="text">
					</div>
				</td>
			</tr>
			<tr>
				<td>Date of Birth</td>
				<td>
					<div class="col-lg-3">
					<select class="form-control"name="dobMonth">
					  <option value="0">Month</option>
					  <option value="1">January</option>
					  <option value="2">February</option>
					  <option value="3">March</option>
					  <option value="4">April</option>
					  <option value="5">May</option>
					  <option value="6">June</option>
					  <option value="7">July</option>
					  <option value="8">August</option>
					  <option value="9">September</option>
					  <option value="10">October</option>
					  <option value="11">November</option>
					  <option value="12">December</option>
					</select>
					</div>
					<div class="col-lg-3">
					<select class="form-control" name="dobDate">
					  <option>Date</option>
					  <option value="1">1</option>
					  <option value="2">2</option>
					  <option value="3">3</option>
					  <option value="4">4</option>
					  <option value="5">5</option>
					  <option value="6">6</option>
					</select>
					</div>
				</td>
			</tr>
			<tr>
				<td>Gender</td>
				<td>
					<div class="col-lg-6">
					  <label class="radio-inline">
					    <input type="radio" name="sex" id="male" value="male" >
					    Male
					  </label>
					  <label class="radio-inline">
					    <input type="radio" name="sex" id="female" value="female">
					    Female
					  </label>
					</div>
				</td>
			</tr>
			<tr>
				<td>Service Taken</td>
				<td>
					<div class="col-lg-6">
					  <label class="radio-inline">
					    <input type="radio" name="serviceTaken" id="domain" value="domain" >
					    Domain
					  </label>
					  <label class="radio-inline">
					    <input type="radio" name="serviceTaken" id="hosting" value="hosting">
					    Hosting
					  </label>
					  <label class="radio-inline">
					    <input type="radio" name="serviceTaken" id="designing" value="designing">
					    Designing
					  </label>
					  <label class="radio-inline">
					    <input type="radio" name="serviceTaken" id="programming" value="programming">
					    Programming
					  </label>
					</div>
				</td>
			</tr>	
			<tr>
				<td>Select Products</td>
				<td>
					<div class="col-lg-6">
					<input name="selectProduct" class="form-control" placeholder="Select or Enter Products" required="" type="text" list=product>
					<div class="col-lg-3">
					<datalist id="product">
					  <option>Sales Software
					  <option>Marketing Software
					  <option>CRM
					</datalist>
					</div>
					</div>
				</td>
			</tr>
			
			<tr>
				<td>Remarks</td>
				<td>
					<div class="col-lg-6">
					<textarea name="remarks" class="form-control" rows="3"></textarea>
					</div>
				</td>
			</tr>
								
			</tbody>
			</table>
			
			<div class="modal-footer"><input value="Finish" class="btn btn-primary pull-right" type="submit"></div>
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



