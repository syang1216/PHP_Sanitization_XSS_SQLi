<?php
require_once('../../../private/initialize.php');

$errors = array();
$state = array(
  'name' => '',
  'code' => '',
  'countryid' => ''
);

if(isset($_GET['id']) && mysqli_num_rows(find_country_by_id($_GET['id']))) {
  $state['countryid'] = $_GET['id'];
}

if(is_post_request()) {

  // Confirm that values are present before accessing them.
  if(isset($_POST['name'])) { $state['name'] = h($_POST['name']); }
  if(isset($_POST['code'])) { $state['code'] = h($_POST['code']); }

  $result = insert_state($state);
  if($result === true) {
    $new_id = db_insert_id($db);
    if(isset($_GET['id'])){
      redirect_to('../countries/show.php?id=' . $_GET['id']);
    }else{
      redirect_to('show.php?id=' . $new_id);
    }
  } else {
    $errors = $result;
  }
}
?>
<?php $page_title = 'Staff: New State'; ?>
<?php include(SHARED_PATH . '/header.php'); ?>

<div id="main-content">
  <a href="index.php">Back to States List</a><br />

  <h1>New State</h1>

 <?php echo display_errors($errors); ?>
  <form action="new.php?id=<?php echo $_GET['id']?>" method="post">
    Name:<br />
    <input type="text" name="name" value="<?php echo $state['name']; ?>" /><br />
    Code:<br />
    <input type="text" name="code" value="<?php echo $state['code']; ?>" /><br />
    <input type="submit" name="submit" value="Create"  />
  </form>

</div>

<?php include(SHARED_PATH . '/footer.php'); ?>
