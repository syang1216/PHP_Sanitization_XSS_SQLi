<?php
require_once('../../../private/initialize.php');
$territories = array(
  'name' => '',
  'position' => '',
  'state_id' => ''
);
if(isset($_GET['id']) && mysqli_num_rows(find_state_by_id($_GET['id']))) {
	// Maybe do a query to check before
	$territories['state_id'] = h($_GET['id']);
}
else{redirect_to('../index.php');}

$errors = array();


if(is_post_request()) {

  // Confirm that values are present before accessing them.

  if(isset($_POST['name'])) { $territories['name'] = h($_POST['name']); }
  if(isset($_POST['position'])) { $territories['position'] = h($_POST['position']); }

  $result = insert_territory($territories);
  if($result === true) {
    $new_id = db_insert_id($db);
    redirect_to('show.php?id=' . $new_id);
  } else {
    $errors = $result;
  }
}
?>
<?php $page_title = 'Staff: New Territory'; ?>
<?php include(SHARED_PATH . '/header.php'); ?>

<div id="main-content">
  <a href="<?php echo "../states/show.php?id=" . $_GET['id']; ?>">Back to State Details</a><br />

  <h1>New Territory</h1>
<?php echo display_errors($errors); ?>
    <form action="new.php?id=<?php echo $_GET['id'] ?>" method="post">
    Name:<br />
    <input type="text" name="name" value="<?php echo $territories['name']; ?>" /><br />
    Position:<br />
    <input type="text" name="position" value="<?php echo $territories['position']; ?>" /><br />
    <br />
    <input type="submit" name="submit" value="Create"  />
  </form>

</div>

<?php include(SHARED_PATH . '/footer.php'); ?>
