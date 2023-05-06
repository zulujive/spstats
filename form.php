<!DOCTYPE html>
<html>
  <?php
	include(dirname(__FILE__).'/config.php');
	if ($response_enabled == true) {
      		$submit_disabled = 'enabled';
      		$submit_cursor = 'pointer';
      		$submit_alt = 'Submit';
    }
  	if ($response_enabled == false) {
      		$submit_disabled = 'disabled';
      		$submit_cursor = 'not-allowed';
      		$submit_alt = 'responses are currently disabled';
    }
	?>
  <head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title><?php echo $site_name ?> Archive Utility</title>
    <style>
      body {
        font-family: Arial, Helvetica, sans-serif;
        background-color: rgb(54, 54, 54);
        color: white;
      }
      input, textarea {
        background-color: lightgrey;
        border-style: solid;
        border-width: 2px;
        margin-top: 3px;
        margin-bottom: 3px;
        padding: 2px;
        border-color: white;
        border-radius: 5px;
      }
      form {
        display: flex;
        flex-direction: column;
        border-radius: 0px;
      }
      label {
        margin-left: 10px;
      }
    </style>
  </head>
  <body>
    <h1><i class="fa fa-cogs" aria-hidden="true"></i> <?php echo $site_name ?> Archive Utility</h1>
    <hr>
    <h2>Instructions:</h2>
    <p>This utility will generate a new post on the <?php echo $site_name ?> Archives page. If you are unsure of how to do something, ask first before posting.</p>
    <p style="color: red;background-color:white;padding-right:.25em;display:inline-block;margin-top:0;">Warning, unauthorized use of this utility will result in an IP-ban.</p>
    <br>
    <form method="post" action="submit.php">
      <div><label>Title:</label>
        <input type="text" name="title"></div>
      <br>
      <div><label>Image URL:</label>
        <input type="text" name="image_url"></div>
      <br>
      <div><label>Dates:</label>
      <input name="dates"></div>
      <br>
      <div><label>Description:</label>
        <textarea name="description" rows="7" cols="50"></textarea></div>
      <br>
      <div><label>First Pixel:</label>
        <input name="first_pixel"></div>
      <br>
        <div><label>Final Pixel:</label>
          <input name="final_pixel"></div>
      <br>
      <div><label>Top User:</label>
        <input name="top_user"></div>
      <br>
      <div><label>Total Pixels:</label>
        <input name="total_pixels"></div>
      <br>
      <div><label>Password:</label>
        <input type="password" name="secret_key"></div>
      <br>
      <div><input style="padding: 7px 8px;cursor:<?php echo $submit_cursor ?>;" type="submit" value="Submit" <?php echo $submit_disabled ?> title="<?php echo $submit_alt ?>"></div>
    </form>
  </body>
</html>
