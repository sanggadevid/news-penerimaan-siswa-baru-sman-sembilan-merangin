<?php
session_start();
session_destroy();

echo "<meta http-equiv='refresh' content='0; url=index.php?module=login_p'>";

exit;
