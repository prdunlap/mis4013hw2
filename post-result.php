<?php
$pageTitle = "Post Result";
include "view-header.php";
?>
    <h1>Post Result</h1>
<?php
if (isset($_POST['my-name'])) {
  ?>
  <p>The value sent is: </p>
  <?
  echo $_POST['my-name'];
} else {
  ?>
  <p>Nothing posted to the page.</p>
  <?
}
include "view-footer.php";
?>
