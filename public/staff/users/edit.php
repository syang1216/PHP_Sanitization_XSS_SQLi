<?php
require_once('../../../private/initialize.php');

if(!isset($_GET['id'])) {
  redirect_to('index.php');
}
$users_result = find_user_by_id($_GET['id']);
// No loop, only one result
$user = db_fetch_assoc($users_result);

// Set default values for all variables the page needs.
$errors = array();

if(is_post_request()) {

  // Confirm that values are present before accessing them.
  if(isset($_POST['first_name'])) { $user['first_name'] = h($_POST['first_name']); }
  if(isset($_POST['last_name'])) { $user['last_name'] = h($_POST['last_name']); }
  if(isset($_POST['username'])) { $user['username'] = h($_POST['username']); }
  if(isset($_POST['email'])) { $user['email'] = h($_POST['email']); }

  $result = update_user($user);
  if($result === true) {
    redirect_to('show.php?id=' . $user['id']);
  } else {
    $errors = $result;
  }
}
?>
<?php $page_title = 'Staff: Edit User ' . $user['first_name'] . " " . $user['last_name']; ?>
<?php include(SHARED_PATH . '/header.php'); ?>

<div id="main-content">
  <a href="index.php">Back to Users List</a><br />

  <div class="row">
    <div class="col-sm-offset-2 col-sm-6">
        <h1>Edit User: <?php echo $user['first_name'] . " " . $user['last_name']; ?></h1>
    </div>
  </div>
  <br>

  <?php echo display_errors($errors); ?>

  <form class="form-horizontal" action="edit.php?id=<?php echo $_GET['id'] ?>" method="post">
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
  <div class="col-sm-offset-2 col-sm-6">
  <a href="delete.php?id=<?php echo $user['id']; ?>">Delete</a><br />
  </div>
</div>

<?php include(SHARED_PATH . '/footer.php'); ?>
