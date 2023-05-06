<?php
include(dirname(__FILE__).'/config.php');
if($_SERVER['REQUEST_METHOD'] == 'POST') {
  $submitted_key = $_POST['secret_key'];
if ($submitted_key !== $valid_key) {
    // Invalid key, display an error message and exit
    echo 'Invalid password, continued abuse will result in a temporary IP-ban';
    exit;
}
if ($response_enabled == false) {
    echo 'Form submissions are disabled, please contact your system administrator for more information';
    exit;
}

  // Get the form data
  $title = $_POST['title'];
  $image_url = $_POST['image_url'];
  $description = $_POST['description'];
  $first_pixel = $_POST['first_pixel'];
  $final_pixel = $_POST['final_pixel'];
  $top_user = $_POST['top_user'];
  $total_pixels = $_POST['total_pixels'];
  
  // Create the HTML string
  $html = "\n";
  $html .= '<div class="article">'."\n";
  $html .= '<h1 style="color: white;text-decoration: none;"><i class="fa fa-flag" aria-hidden="true"></i> ' . $title . '</h1>'."\n";
  $html .= '<p style="margin-top: 0;color: rgb(189, 189, 189);">' . $dates . '</p><hr><br><br>';
  $html .= '<img src="' . $image_url . '?<?php echo $filemtime; ?>" width="500" height="500" style="border-radius:10px;border-width:.25rem;border-color:#0f0013;border-style:solid;display:block;margin-left:auto;margin-right:auto;" alt="' . $title . '">'."\n";
  $html .= '<div class="info"><h2><i class="fa fa-info-circle" aria-hidden="true"></i> Info</h2><p>' . $description . "</p><hr>\n";
  $html .= '<h2><i class="fa fa-area-chart" aria-hidden="true"></i> Stats</h2>'."\n";
  $html .= '<p><b>First Pixel:</b> ' . $first_pixel . "</p>\n";
  $html .= '<p><b>Final Pixel:</b> ' . $final_pixel . "</p>\n";
  $html .= '<p><b>Top User:</b> ' . $top_user . "</p>\n";
  $html .= '<p><b>Total Pixels:</b> ' . $total_pixels . "</p>\n";
  $html .= '</div>'."\n";
  $html .= '</div>'."\n";

  
  // Read the existing HTML file and locate the insertion point
  $file = fopen($filename, 'r+');
  $contents = fread($file, filesize($filename));
  $insertion_point = strpos($contents, '<!-- INSERT CONTENT HERE -->') + strlen('<!-- INSERT CONTENT HERE -->');
  
  // Insert the new HTML content after the insertion point
  $new_contents = substr_replace($contents, $html, $insertion_point, 0);
  fseek($file, 0);
  fwrite($file, $new_contents);
  fclose($file);
  
  // Display a message to the user
  echo 'Your content has been posted. <a href="' . $site_url . '' . $archives_path . '">Click here</a> to view it.';
}
?>
