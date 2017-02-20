<?php
require_once('../../../private/initialize.php');

if(!isset($_GET['id'])) {
  redirect_to('index.php');
}
$id = $_GET['id'];
$users_result = find_user_by_id($id);
// No loop, only one result
$user = db_fetch_assoc($users_result);
?>

<?php $page_title = 'Staff: User ' . $user['first_name'] . " " . $user['last_name']; ?>
<?php include(SHARED_PATH . '/header.php'); ?>

<div id="main-content">
  <a href="index.php">Back to Users List</a><br />
  
  <h1>User: <?php echo $user['first_name'] . " " . $user['last_name']; ?></h1>

  <?php
    echo "<table id=\"user\" class=\"table table-sm\">";
    echo "<tr>";
    echo "<td class=\"col-md-2\">Name: </td>";
    echo "<td>" . $user['first_name'] . " " . $user['last_name'] . "</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td class=\"col-md-2\">Username: </td>";
    echo "<td>" . $user['username'] . "</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td class=\"col-md-2\">Email: </td>";
    echo "<td>" . $user['email'] . "</td>";
    echo "</tr>";
    echo "</table>";

    db_free_result($users_result);
  ?>
  <br />
  <a href="edit.php?id=<?php echo $user['id']; ?>">Edit</a>
  <a href="delete.php?id=<?php echo $user['id']; ?>">Delete</a><br />

</div>

<?php include(SHARED_PATH . '/footer.php'); ?>
