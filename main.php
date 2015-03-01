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

  <title>Home</title>
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
    	<table class="table table-striped table-bordered ">
								<thead>
									<tr>
										<th>Company Name</th>
										<th>Client Name</th>
										<th>Country</th>
										<th>Service Taken</th>
										<th>Product Selected</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
									<?php 
										$var = array("Date Added", "Company Name", "Client Name", "Email", "Password", "Country", "State", "City", "Zip Code", "Street Address", "Tel No", "Alternate Tel No", "Mobile No", "Fax No", "Date of Birth", "Gender", "Service Taken", "Products Selected", "Remarks");
										include 'db_con.php';
										$q = "SELECT * FROM `users`";
										$result = mysqli_query($conn,$q);
										if(!$result){
											DIE("Database query failed");
										}
										while($row = mysqli_fetch_row($result)){
											$s = '<dl class=dl-horizontal>';
											$i = 0;
											$j = 0;
											while ($j < 20) {
												$s = $s . "<dt>$var[$i]</dt>";
												if($j == 14){
													$s = $s . "<dd>$row[14]/$row[15]</dd>";
													$j += 1; 
												}else{
													$s = $s . "<dd>$row[$j]</dd>";
												}
												$i++;
												$j++;
											}
											$s = $s . '</dl>';
											echo "<tr>";
											echo "<td>$row[1]</td>";
											echo "<td>$row[2]</td>";
											echo "<td>$row[5]</td>";
											echo "<td>$row[17]</td>";
											echo "<td>$row[18]</td>";
											echo '<td>
													<div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
												    <div class="modal-dialog">
												      <div class="modal-content">
												
												        <div class="modal-header">
												          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
												          <h4 class="modal-title" id="myModalLabel">Details</h4>
												        </div>
												        <div class="modal-body">'
												         . $s . 
												        '</div>
												        <div class="modal-footer">
												          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
												          <a href="edit.php?email=' . $row[3] . '"><button type="button" class="btn btn-primary">Edit</button></a>
												        </div>
												
												      </div>
												    </div>
												  </div>
												
												  <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#myModal">
												    View
												  </button>
												  <a href="edit.php?email=' . $row[3] . '"><button class="btn btn-primary btn-sm">
												    Edit
												  </button><a>
												  <a href="delet.php?email=' . $row[3] . '"><button class="btn btn-primary btn-sm">
												    Delete
												  </button></a>
												</td>';
											echo "</tr>";
										}
										include 'db_clo.php';
									
									?>
																								
								</tbody>
							</table>
							<script src="js/jquery.min.js"></script>
							<script src="js/transition.js"></script>
							<script src="js/modal.js"></script>
							<script src="js/tooltip.js"></script>
							<script src="js/popover.js"></script>
							
							<!-- JavaScript Test -->
							<script>
							$(function () {
							  $('.js-popover').popover()
							  $('.js-tooltip').tooltip()
							})
							</script>
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



