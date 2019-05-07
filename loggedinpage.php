

<?php

    session_start();

    if (array_key_exists("id", $_COOKIE)) {
        
        $_SESSION['id'] = $_COOKIE['id'];
        
    }

    if (array_key_exists("id", $_SESSION)) {
        
        echo "<p>Logged In! <a href='
        loginandsignup.php?logout=1'>Log out</a></p>";
        
    } else {
        
        header("Location: loginandsignup.php");
        
    }
include("header.php");
?>
    <div class="container-fluid">
        <textarea id="diary" class="form-control"></textarea>



    </div>






<?php
include("footer.php");
?>