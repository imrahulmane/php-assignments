<?php

$file = fopen("web.txt", "r") or die("Unable to open file");
echo fread($file, filesize("web.txt")) . "\n";
fclose($file);
