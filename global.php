<?php
// Get the folder name (name of project we are in)
$url_folder = substr(substr($_SERVER["REQUEST_URI"],1), 0, strpos(substr($_SERVER["REQUEST_URI"],1), "/"));
// If we are in a project folder, set the root to go up on directory, else grab from the current directory
if ($url_folder != '') {
  $root = '../';
}
else {
  $root = '';
}
// Define the location of the header
$header = $root . 'includes/header.php';
// Define the location of the footer
$footer = $root . 'includes/footer.php';

?>