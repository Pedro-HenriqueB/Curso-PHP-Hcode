<?php

$link = "https://ssl.gstatic.com/ui/v1/icons/mail/rfr/logo_gmail_lockup_default_1x_r2.png";
$content = file_get_contents($link);
$parse = parse_url($link);
$basename = basename($parse["path"]);

$file = fopen($basename, "w+");
fwrite($file, $content);
fclose($file);

?>

<img src="<?= $basename ?>">