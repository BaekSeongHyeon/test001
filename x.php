<?php
#$pp=shell_exec("git pull origin main");
#echo $pp;
#$q=file_put_contents("./sample.txt","hello");
#echo $q;
#shell_exec("sudo git config --global --add safe.directory /var/www/html/bo");
$output = shell_exec("sudo git config --global --add safe.directory /var/www/html/bo 2>&1 && sudo git add . 2>&1 && sudo git commit -m 'autoooo' 2>&1 && sudo git push origin main  2>&1");
echo $output;
#shell_exec("git commit -m 'autoto'");
#shell_exec("git push origin  main");
?>
