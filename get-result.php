<?php
$pageTitle = "Get Result";
include "view-header.php";
?>
    <h1>Get Result</h1>
<?php
if (isset($_GET['my-name'])) {
  ?>
  <p>The value sent is: </p>
  <?
  echo $_GET['my-name'];
} else {
  ?>
  <p>Nothing sent to the page.</p>
  <?
}
include "view-footer.php";
?>
