<?php
$pageTitle = "Post Result";
include "view-header.php";
?>
    <h1>Post Result</h1>
<?php
echo getDisplay();
include "view-footer.php";

function getDisplay(){
if (isset($_POST['my-name'])) {
  ?>
  <p>The value sent is: </p>
  <?php
  echo $_POST['my-name'];
} else {
  ?>
  <p>Nothing posted to the page.</p>
  <?php
}
include "view-footer.php";
?>
}
?>
