<?php
	session_start();
	if (!isset($_SESSION['usr_email'])) {
		header('Location: index.html');
	}
	
?>
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

  <title>Update</title>
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
    	<form action="update.php" method="post" >					
		<table class="table table-striped">
			<tbody><tr>
				<?php
					$email = $_GET['email'];
					$q = "SELECT `dateAdded`, `companyName`, `clientName`, `email`, `password`, `country`, `state`, `city`, `zip`, `sAddr`, `telNo`, `aTelNo`, `mobileNo`, `faxNo`, `dobMonth`, `dobDate`, `sex`, `serviceTaken`, `selectProduct`, `remarks` FROM `users` WHERE `email` = '$email'";
					require_once 'db_con.php';
					$result = mysqli_query($conn, $q);
					if(!$result){
						DIE("Error");
					}
					$row = mysqli_fetch_row($result);
					require_once 'db_clo.php';
				echo '<td>Date Added</td>
				<td>
					<div class="col-lg-6">
					<input name="dateAdded" value="' . $row[0] . '" class="form-control" placeholder="Date Added" required="" class="datepicker hasDatepicker" type="date">
					</div>
				</td>
			</tr>
			
			<tr>
				<td>Company Name</td>
				<td>
					<div class="col-lg-6">
					<input name="companyName" value="' . $row[1] . '" class="form-control" placeholder="Company Name" required="" type="text">
					</div>					
				</td>
			</tr>
			
			<tr>
				<td>Client Name</td>
				<td>
					<div class="col-lg-6">
					<input name="clientName" value="' . $row[2] . '" class="form-control" placeholder="Client Name" required="" type="text">
					</div>
				</td>
			</tr>
			
			<tr>
				<td>Email</td>
				<td>
					<div class="col-lg-6">
					<input name="email" value="' . $row[3] . '" class="form-control" placeholder="Email" required="" type="email">
					</div>					
				</td>
			</tr>
			<tr>
				<td>Old Password</td>
				<td>
					<div class="col-lg-6">
					<input name="oPassword" class="form-control" placeholder="Old Password" required="" type="password">
					</div>
				</td>
			</tr>
			<tr>
				<td>Password</td>
				<td>
					<div class="col-lg-6">
					<input name="nPassword" class="form-control" placeholder="Password" required="" type="password">
					</div>
				</td>
			</tr>
			
			<td>Country</td>
				<td>
					<div class="col-lg-6">
					<input name="country" value="' . $row[5] . '" class="form-control" placeholder="Country" required="" type="text">
					</div>
				</td>
			</tr>
			
			<tr>
				<td>State</td>
				<td>
					<div class="col-lg-6">
					<input name="state" value="' . $row[6] . '" class="form-control" placeholder="State" required="" type="text">
					</div>					
				</td>
			</tr>
			
			<tr>
				<td>City</td>
				<td>
					<div class="col-lg-6">
					<input name="city" value="' . $row[7] . '" class="form-control" placeholder="City" required="" type="text">
					</div>
				</td>
			</tr>
			
			<tr>
				<td>Zip Code</td>
				<td>
					<div class="col-lg-6">
					<input name="zip" value="' . $row[8] . '" class="form-control" placeholder="Zip Code" required="" type="text">
					</div>					
				</td>
			</tr>
			<tr>
				<td>Street Address</td>
				<td>
					<div class="col-lg-6">
					<textarea name="sAddr" placeholder="Street Address" class="form-control" rows="3">' . $row[9] . '</textarea>
					</div>
				</td>
			</tr>
			<tr>
				<td>Tel No</td>
				<td>
					<div class="col-lg-6">
					<input name="telNo" value="' . $row[10] . '" class="form-control" placeholder="Tel No" required="" type="text">
					</div>
				</td>
			</tr>
			<tr>
				<td>Alternate Tel No</td>
				<td>
					<div class="col-lg-6">
					<input name="aTelNo" value="' . $row[11] . '" class="form-control" placeholder="Alternate Tel No" required="" type="text">
					</div>
				</td>
			</tr>
			<tr>
				<td>Mobile No</td>
				<td>
					<div class="col-lg-6">
					<input name="mobileNo" value="' . $row[12] . '" class="form-control" placeholder="Mobile No" required="" type="text">
					</div>
				</td>
			</tr>
			<tr>
				<td>Fax No</td>
				<td>
					<div class="col-lg-6">
					<input name="faxNo" value="' . $row[13] . '" class="form-control" placeholder="Fax No" required="" type="text">
					</div>
				</td>
			</tr>
			<tr>
				<td>Date of Birth</td>
				<td>
					<div class="col-lg-3">
					<select class="form-control"name="dobMonth">
					
					  <option value="0">Month</option>
					  <option value="1"'; 
					  	if($row[14] == 1)
							echo "selected";
					   	echo'>January</option>
					  <option value="2"'; 
					  	if($row[14] == 2)
							echo "selected";
					   	echo'>February</option>
					  <option value="3"'; 
					  	if($row[14] == 3)
							echo "selected";
					   	echo'>March</option>
					  <option value="4"'; 
					  	if($row[14] == 4)
							echo "selected";
					   	echo'>April</option>
					  <option value="5"'; 
					  	if($row[14] == 5)
							echo "selected";
					   	echo'>May</option>
					  <option value="6"'; 
					  	if($row[14] == 6)
							echo "selected";
					   	echo'>June</option>
					  <option value="7"'; 
					  	if($row[14] == 7)
							echo "selected";
					   	echo'>July</option>
					  <option value="8"'; 
					  	if($row[14] == 8)
							echo "selected";
					   	echo'>August</option>
					  <option value="9"'; 
					  	if($row[14] == 9)
							echo "selected";
					   	echo'>September</option>
					  <option value="10"'; 
					  	if($row[14] == 10)
							echo "selected";
					   	echo'>October</option>
					  <option value="11"'; 
					  	if($row[14] == 11)
							echo "selected";
					   	echo'>November</option>
					  <option value="12"'; 
					  	if($row[14] == 12)
							echo "selected";
					   	echo'>December</option>
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
					    <input type="radio" name="sex" id="male" value="male"';
						if($row[16] == "male")
							echo "checked";
						echo '>
					    Male
					  </label>
					  <label class="radio-inline">
					    <input type="radio" name="sex" id="female" value="female"';
						if($row[16] == "female")
							echo "checked";
						echo '>
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
					    <input type="radio" name="serviceTaken" id="domain" value="domain" ';
						if($row[17] == "domain")
							echo "checked";
						echo '>
					    Domain
					  </label>
					  <label class="radio-inline">
					    <input type="radio" name="serviceTaken" id="hosting" value="hosting"';
						if($row[17] == "hosting")
							echo "checked";
						echo '>
					    Hosting
					  </label>
					  <label class="radio-inline">
					    <input type="radio" name="serviceTaken" id="designing" value="designing"';
						if($row[17] == "designing")
							echo "checked";
						echo '>
					    Designing
					  </label>
					  <label class="radio-inline">
					    <input type="radio" name="serviceTaken" id="programming" value="programming"';
						if($row[17] == "programming")
							echo "checked";
						echo '>
					    Programming
					  </label>
					</div>
				</td>
			</tr>	
			<tr>
				<td>Select Products</td>
				<td>
					<div class="col-lg-6">
					<input name="selectProduct" value="' . $row[18] . '" class="form-control" placeholder="Select or Enter Products" required="" type="text" list=product>
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
					<textarea name="remarks" class="form-control" rows="3">' . $row[19] . '</textarea>
					</div>
				</td>
			</tr>'
			?>				
			</tbody>
			</table>
			<div class="modal-footer"><input value="Update" class="btn btn-primary pull-right" type="submit"></div>
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
