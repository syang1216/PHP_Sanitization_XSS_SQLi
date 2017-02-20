<?php

  function h($string="") {
    return htmlspecialchars($string);
  }

  function u($string="") {
    return urlencode($string);
  }

  function raw_u($string="") {
    return rawurlencode($string);
  }

  function e($conn, $string=""){
    return mysqli_real_escape_string($conn, $string);
  }

  function redirect_to($location) {
    header("Location: " . $location);
    exit;
  }

  function is_post_request() {
    return $_SERVER['REQUEST_METHOD'] == 'POST';
  }

  function display_errors($errors=array()) {
    $output = '';
    if (!empty($errors)) {
      $output .= "<div class=\"alert alert-warning row\">";

      $output .= "<div class=\"errors\">";

      $output .= "<div class=\"col-sm-offset-2 col-sm-6\">";
      $output .= "Please fix the following errors:";
      $output .= "</div>";
      $output .= "<ul>";
      foreach ($errors as $error) {
        $output .= "<div class=\"col-sm-offset-2 col-sm-6\">";
        $output .= "<li>{$error}</li>";
              $output .= "</div>";
      }
      $output .= "</ul>";
      $output .= "</div>";
      $output .= "</div>";
      $output .= "</br>";
    }
    return $output;
  }
  
?>
