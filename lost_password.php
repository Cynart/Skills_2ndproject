<?php  session_start(); ?>

<?php include 'header.php';  ?>
<?php $email = ""; ?>

<div class="formresponse">
<h3>Lost Password</h3>
<br /><br />
<form action="email_password.php" method="POST">
  <label for="email">Enter client's email:</label>
  <input type="email" id="email" name="email">
  <input type="submit">
</form>

<br /><br /><br /><br />
<a href='logout.php'>Log out</a>

</div>

<?php include 'footer.php';  ?>