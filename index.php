<?php  session_start(); ?>
<?php include 'header.php';  ?>


    <main>
    <div class="form1">
    <div class="formtitle">Welcome to Your IT Support System</div>
    <br /> <br />
    
    <form action="welcome.php" method="POST">
    <div class="formtext"> 
        <select id="title" name="title">
            <option value="Ms">Ms.</option>
            <option value="Mr">Mr.</option>
            <option value="Mrs">Mrs.</option>
        </select>
        <label for="fName" class="fName">First Name</label>
                <input type="fName" name="fName" id="fName">

        <label for="fName" class="lName">Last Name</label>
                <input type="lName" name="lName" id="lName">

        <select id="role" class="role">
            <option value = "Admin">Admin</option>
            <option value="Manager">Manager</option>
            <option value="CEO">CEO</option>
        </select>

        <input type="submit">
    </div>


</form>
    
    
    </div>
       
    </main>
   

<?php include 'footer.php';  ?>
