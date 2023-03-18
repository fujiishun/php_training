<?php include('header.php'); ?>
<form method="post">
<input type="submit" name="keiji">
</form>

<?php
if (isset($_POST['keiji'])) {
  header("Location:http://localhost:8888/php_lesson01/keiji.php");
  exit;
}
?>
<?php include('footer.php'); ?>