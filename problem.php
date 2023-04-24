<?php  session_start(); ?>
<?php include 'header.php';  ?>


<?php $fullname = $role = ""; ?>

<div class="formresponse">

 
<div class="formtitle">Hello  <?php echo $_POST["role"] . " " . $_POST["fullname"]; ?> </b> </div>
<br /><br />
Here are your options:
<br /><br />
  <?php
  
         if ($_POST["role"] == "Admin") 
         {echo "<a href='new_account.php'>Client needs a new account</a><br><br>
          <a href='isnt_working.php'>Client's computer is not working</a>";}
        
          elseif ($_POST["role"] == "Manager") 
          {echo "<a href='lost_password.php'>Client lost their password</a><br><br>
            <a href='isnt_working.php'>Client's computer is not working</a>";}
        
          elseif ($_POST["role"] == "CEO") 
          {echo "<a href='need_help.php'>Client needs other help</a><br><br>
            <a href='isnt_working.php'>Client's computer is not working</a>";}

  ?>
  <br /><br /><br /><br />
<a href='logout.php'>Log out</a>

</div>

<?php include 'footer.php';  ?>
