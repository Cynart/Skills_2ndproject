<?php  session_start(); ?>
<?php include 'header.php';  ?>
<?php $fullname = $role = ""; ?>

    <main>
    <div class="form1">
    <div class="formtitle">Welcome to Your IT Support System
    <br /> <br />
    
    <form action="problem.php" method="POST">
    Full name: <input type="text" name="fullname">

    <select name="role">
            <option value = "Admin">Admin</option>
            <option value = "Manager">Manager</option>
            <option value = "CEO">CEO</option>
        </select>
     <button type="submit" name="login">Login</button>
</form>
    
    </div>
        </div>
       
    </main>
   

<?php include 'footer.php';  ?>
