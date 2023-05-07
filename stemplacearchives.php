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
    <style>
        body {
            background-color: <?php echo $background_color ?>;
            color: white;
            font-family: "Segoe UI",Roboto,"Helvetica Neue",Arial,"Noto Sans",sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol","Noto Color Emoji";
        }
      a {
      	    color: white;
      }
        .navbar {
            width: 100vw;
            background-color: <?php echo $navbar_color ?>;
            white-space: nowrap;
            display: block;
            padding-top: 0rem;
            margin-bottom: 1rem;
            margin-left: -1vw;
            margin-top: -1rem;
            padding-bottom: 1rem;
            text-align: center;
            transition: ease .2s;
            overflow-x: hidden;
        }
      .navbar>.profile {
      		margin-left: max(50vw, 37vmax);
        	margin-top: -2rem;
        	position: absolute;
        	font-size: 1.5rem;
        	transition: ease .2s;
      }
      .navbar>.profile:hover {
      		color: <?php echo $profile_hover_color ?>;
      }
      .navbar>small {
      		color: lightgrey;
      }
        .article {
            background-color: <?php echo $article_color ?>;
            width: min(75%, 1000px);
            margin: auto;
            margin-bottom: 1rem;
            padding: .5rem;
            padding-top: .001rem;
            padding-left: 2rem;
            padding-right: 2rem;
            border-radius: 15px;
            text-align: center;
            transition: ease .2s;
        }
        .article>p {
            font-size: medium;
        }
        .info {
            font-size: 1.2rem;
            background-color: <?php echo $info_color ?>;
            margin-left: 1rem;
            margin-right: 2rem;
            margin-top: 1rem;
            margin-bottom: 1.5rem;
            padding: .7rem;
            padding-top: .1rem;
            padding-bottom: .1rem;
            padding-left: 1rem;
            border-radius: 10px;
            text-align: left;
       	    line-height: 1.4rem;
        }
        .info>p {
            padding-left: .4rem;
        }
        .article:hover {
            background-color: <?php echo $article_hover_color ?>;
        }
	.image {
	    border-radius: 10px;
	    border-width: .25rem;
	    border-color: <?php echo $image_border_color ?>;
	    border-style: solid;
	    display:block;
      width: min(60vw, 35rem);
      height: min(60vw, 35rem);
	    margin-left:auto;
	    margin-right:auto;
	}
  .footer {
    color: lightgrey;
    text-align: center;
  }
	@media screen and (max-width: 800px) {
    .navbar>.profile {
      display: none;
      }
  }
      	@media screen and (max-width: 700px) {
           .info {
              display: none;
           }
           .image {
              margin-bottom: 1.5rem;
           }
        }
    </style>
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
              This is what your first page should look like. Delete 
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
      Made with <i class="fa fa-heart" aria-hidden="true"></i> in <i class="fa-brands fa-php fa-2xl"></i>
    </p>
  </div>
</body>
</html>
