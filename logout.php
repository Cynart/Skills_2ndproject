<?php  session_start(); ?>

<?php include 'header.php';  ?>

<div class="formresponse">

<?php

  session_destroy();

  echo "Thank you, your session has ended."
    
?>
</div>

<?php include 'footer.php';  ?>