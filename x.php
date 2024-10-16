<?php
$output = shell_exec("sudo git config --global --add safe.directory /var/www/html/bo 2>&1 && sudo git pull origin main && sudo git add . 2>&1 && sudo git commit -m 'autoooo' 2>&1 && sudo git push origin main  2>&1");
echo $output;
?>
