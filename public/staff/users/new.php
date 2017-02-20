<?php
require_once('../../../private/initialize.php');

// Set default values for all variables the page needs.
$errors = array();
$user = array(
  'first_name' => '',
  'last_name' => '',
  'username' => '',
  'email' => ''
);

if(is_post_request()) {

  // Confirm that values are present before accessing them.
  if(isset($_POST['first_name'])) { $user['first_name'] = $_POST['first_name']; }
  if(isset($_POST['last_name'])) { $user['last_name'] = $_POST['last_name']; }
  if(isset($_POST['username'])) { $user['username'] = $_POST['username']; }
  if(isset($_POST['email'])) { $user['email'] = $_POST['email']; }

  $result = insert_user($user);
  if($result === true) {
    $new_id = db_insert_id($db);
    redirect_to('show.php?id=' . $new_id);
  } else {
    $errors = $result;
  }
}
?>
<?php $page_title = 'Staff: New User'; ?>
<?php include(SHARED_PATH . '/header.php'); ?>

<div id="main-content">
  <a href="index.php">Back to Users List</a><br />

  <div class="row">
    <div class="col-sm-offset-2 col-sm-6">
      <h1>New User</h1>
    </div>
  </div>

  <?php echo display_errors($errors); ?>

  <form class="form-horizontal" action="new.php" method="post">
    <div class="form-group">
      <label class="control-label col-sm-2" for="first_name">First name:</label>
      <div class="col-sm-6">
        <input type="text" class="form-control" id="first_name" name = "first_name" placeholder="Enter first_name" value="<?php echo $user['first_name']; ?>">
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" for="last_name">Last Name:</label>
      <div class="col-sm-6">
        <input type="text" class="form-control" id="last_name" placeholder="Enter Last Name" name="last_name" value="<?php echo $user['last_name']; ?>">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="username">Username:</label>
      <div class="col-sm-6">
        <input type="username" class="form-control" id="username" placeholder="Enter username" name="username" value="<?php echo $user['username']; ?>">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Email:</label>
      <div class="col-sm-6">
        <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" value="<?php echo $user['email']; ?>">
      </div>
    </div>
    <br />

    <div class="form-group"> 
      <div class="col-sm-offset-2 col-sm-6">
        <button type="submit" value="create" name="submit" class="btn btn-default">Submit</button>
      </div>
    </div>
  </form>

</div>

<?php include(SHARED_PATH . '/footer.php'); ?>
