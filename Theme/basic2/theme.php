<!doctype html>
<html lang="en">
<?php
  /*
  All Emoncms code is released under the GNU Affero General Public License.
  See COPYRIGHT.txt and LICENSE.txt.

  ---------------------------------------------------------------------
  Emoncms - open source energy visualisation
  Part of the OpenEnergyMonitor project:
  http://openenergymonitor.org
  */
  global $ltime,$path,$fullwidth,$menucollapses,$emoncms_version,$theme,$themecolor,$favicon,$session;

?>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>My Solar - <?php echo $route->controller.' '.$route->action.' '.$route->subaction; ?></title>
        <link rel="shortcut icon" href="<?php echo $path; ?>Theme/<?php echo $theme; ?>/<?php echo $favicon; ?>" />

  	    <!-- Stylesheets -->
	    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	    <link href="https://www.anamise.com.au/content/custom.css" rel="stylesheet" />
	    <link rel="icon" type="image/png" href="../images/favicon.ico">
    </head>
    <body>
	
		<div style="height:20px;">
		</div>
		  <?php include_once("../analytics/googleanalyticstracking.php"); 
		include_once("../elements/header.php");
		include_once("../elements/livezillachatoverlay.php");
		  ?>
        <div class="container text-center"">
			<div class="col-sm-2">
				    <?php
                       // echo $mainmenu;
					   	if ($session['write']) {echo '<a href="https://anamise.com.au/mysolar/app/view" class="btn btn-danger btn-md" role="button">' . "<div id='app_menu'> <span class='menu-text'>My Menu</span></div></a>";
						};
					?>
			</div>
			<div class="col-sm-8">
			</div>
			<div class="col-sm-2">
					<?php
                        if ($session['write']) {echo '<a href="https://anamise.com.au/mysolar/user/logout" class="btn btn-danger btn-md" role="button">' . "<div id='app_menu'> <span class='menu-text'>Logout</span></div></a>";
						};
                    ?>
			</div>
		</div>


       
			<?php echo $content; ?>
        
 
		<?php include_once("../elements/footer.php"); ?>
    </body>
</html>
