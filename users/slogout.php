<?php
session_start();
session_destroy();
unset($_SESSION['$email']);
?>
<script>
alert("logout");
window.location="../index.php";
</script>