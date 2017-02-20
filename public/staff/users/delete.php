<?php  
require_once('../../../private/initialize.php');
  require_once('../../../private/validation_functions.php');

  
  $errors = array();

  // not sure if it's the correct way to do it
  if(is_post_request() && user_in_database($_GET['id'])){
  	  $result = delete_user($_GET['id']);
	  if($result === true) {
	    redirect_to('index.php');
	  } else {
	    $errors = $result;
	  }
  }

  if(isset($_GET['id']) && user_in_database($_GET['id'])){
  	echo "Are you sure you want to delete user " . $_GET['id'];
  	echo "<form method=\"post\" action=\"delete.php?id=" . $_GET['id'] . "\">";
  	echo "<input type=\"submit\" name=\"submit\" value=\"Delete\"  />";
  	echo "</form>";
    echo "<a href=\"index.php\"> Go back </a>";
  }else{
  	redirect_to('index.php');
  }
?>