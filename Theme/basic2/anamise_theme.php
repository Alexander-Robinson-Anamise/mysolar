<!doctype html>
<?php
  /*
  All Emoncms code is released under the GNU Affero General Public License.
  See COPYRIGHT.txt and LICENSE.txt.

  ---------------------------------------------------------------------
  Emoncms - open source energy visualisation
  Part of the OpenEnergyMonitor project:
  http://openenergymonitor.org
  */
  global $ltime,$path,$fullwidth,$menucollapses,$emoncms_version,$theme,$themecolor,$favicon;

?>
<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>My Solar - <?php echo $route->controller.' '.$route->action.' '.$route->subaction; ?></title>
        <link rel="shortcut icon" href="<?php echo $path; ?>Theme/<?php echo $theme; ?>/<?php echo $favicon; ?>" />
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-status-bar-style" content="black">
        <link rel="apple-touch-startup-image" href="<?php echo $path; ?>Theme/<?php echo $theme; ?>/ios_load.png">
        <link rel="apple-touch-icon" href="<?php echo $path; ?>Theme/<?php echo $theme; ?>/logo_normal.png">
        <link href="<?php echo $path; ?>Lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">        
        <?php if ($themecolor=="blue") { ?>
            <link href="<?php echo $path; ?>Theme/<?php echo $theme; ?>/emon-blue.css" rel="stylesheet">
        <?php } else { ?>
            <link href="<?php echo $path; ?>Theme/<?php echo $theme; ?>/emon-standard.css" rel="stylesheet" >
        <?php } ?>
        <link href="https://www.anamise.com.au/content/custom.css" rel="stylesheet">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
        <script type="text/javascript" src="<?php echo $path; ?>Lib/jquery-1.11.3.min.js"></script>
    </head>
    <body>

            <?php echo $content; ?>
		<?php include_once("../elements/footer.php"); ?>
        <script type="text/javascript" src="<?php echo $path; ?>Lib/bootstrap/js/bootstrap.js"></script>
    </body>
</html>
