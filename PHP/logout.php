<?php
    session_start();
    session_unset();
        $extra="/bus/login_form.php";
        echo "<script>window.location.href='".$extra."'</script>";
        exit();
    
?>