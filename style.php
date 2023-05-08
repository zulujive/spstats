<?php
    header("Content-type: text/css; charset: UTF-8");
?>
<?php
	include(dirname(__FILE__).'/config.php');
	include(dirname(__FILE__).'/themes.php');
	date_default_timezone_set($server_timezone);
	$filename = "canvas-".$canvas_num.".png";
	$filemtime = filemtime($filename);
	$last_updated = date("g:i A (e)", $filemtime);
?>
body {
  background-color: <?php echo $background_color ?>;
  color: white;
  font-family: "Segoe UI",Roboto,"Helvetica Neue",Arial,"Noto Sans",sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol","Noto Color Emoji";
}
a {
  color: white;
}
.navbar {
  background-color: <?php echo $navbar_color ?>;
  display: flex;
  flex-direction: column;
  -webkit-flex-wrap: wrap;
  -webkit-box-align: center;
  flex-wrap: wrap;
  padding-top: 0rem;
  margin-bottom: 1rem;
  margin-top: -1rem;
  padding-bottom: 1rem;
  margin-left: -1rem;
  text-align: center;
  align-items: right;
  transition: ease .2s;
  white-space: nowrap;
}
.navbar>h1 {
  display: inline-block;
  text-align: center;
}
.navbar>.profile {
  margin-left: max(50vw, 85vmax);
  position: absolute;
  margin-top: 2rem;
  font-size: 1.5rem;
  transition: ease .2s;
}
.navbar>.profile:hover {
  color: <?php echo $profile_hover_color ?>;
}
.navbar>small {
  color: lightgrey;
  display: inline-block;
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