<?php
session_start();
session_destroy();
header("Location:index.html");
echo "<script>location='index.html'</script>";
?>
