<!DOCTYPE html>
<html lang="en">
<head>
  	<?php
		date_default_timezone_set('America/Denver');
  		include(dirname(__FILE__).'/config.php');
		include(dirname(__FILE__).'/themes.php');
		$filename = "canvas-".$canvas_num.".png";
		$filemtime = filemtime($filename);
		$last_updated = date("g:i A (e)", $filemtime);
	  ?>


    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  	<meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
	  <meta http-equiv="Pragma" content="no-cache" />
	  <meta http-equiv="Expires" content="0" />
    <title><?php echo $site_name ?> Archives</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  	<link rel="icon" href="/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="style.php">
</head>
<body>
    <div class="navbar">
      <h1 style="margin-bottom:0;"><i class="fa fa-archive" aria-hidden="true"></i> <?php echo $site_name ?> Archives</h1>
      <a href="<?php echo $site_url ?>/profile" class="profile" title="Profile"><i class="fa-regular fa-user"></i></a>
      <small>Last Updated: <em><?php echo $last_updated ?></em></small>
    </div>
<!-- INSERT CONTENT HERE -->
  <!-- Delete example starting here -->
    <div class="article">
      <h1 style="margin-bottom: 0;"><a href="https://stemplace.org" style="color: white;text-decoration:none;"><i class="fa fa-flag" aria-hidden="true"></i> Example</a></h1>
        <p style="margin-top: 0;color: rgb(189, 189, 189);">MM/DD/YYYY - <em>MM/DD/YYYY</em></p>
      <hr>
      <br><br>
        <img class="image" src="https://stats.stemplace.org/extra/canvas-3.png?<?php echo $filemtime; ?>">
        <div class="info">
            <h2><i class="fa fa-info-circle" aria-hidden="true"></i> Info</h2>
            <p>
              This is what your first page should look like. Delete this part (indicated by HTML comments) 
              and then use the Archive Utility to generate your first post.
            </p>
          <hr>
            <h2><i class="fa fa-area-chart" aria-hidden="true"></i> Stats</h2>
            <p>
              <b>First Pixel:</b> --<br>
              <b>Final Pixel:</b> --<br>
              <b>Top User:</b> --<br>
              <b>Total Pixels:</b> --
          </p>
        </div>
    </div>
  <!-- and end here -->
  <div class="footer">
    <p>
      Made with <i class="fa fa-heart" aria-hidden="true"></i> in <i class="fa-brands fa-php fa-2xl"></i> by <b><a href="https://github.com/zulujive" target="_blank">zulujive</a></b>
    </p>
  </div>
</body>
</html>
