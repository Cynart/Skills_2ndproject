<?php  session_start(); ?>

<?php include 'header.php';  ?>
<?php $email = ""; ?>

<div class="formresponse">
<h3>New Account</h3>
<br /><br />
<form action="email_new_account.php" method="POST">
  <label for="email">Enter client's email:</label>
  <input type="email" id="email" name="email">
  <input type="submit">
</form>

<br /><br /><br /><br />
<a href='logout.php'>Log out</a>

</div>

<?php include 'footer.php';  ?>