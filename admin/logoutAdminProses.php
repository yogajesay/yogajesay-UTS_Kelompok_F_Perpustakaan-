<?php
    ob_start();
    session_start();
    session_destroy();
    echo'
    <script>
    alert("Logout Succes.."); 
    window.location ="../index.php"
    </script>';
    
?>