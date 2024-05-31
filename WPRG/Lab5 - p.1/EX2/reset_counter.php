<?php
setcookie('visit_count', '', time() - 3600);

header("Location: visit_counter.php");
exit();
?>
