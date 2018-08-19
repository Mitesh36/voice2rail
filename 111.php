<?php

$fp=fsockopen('tcp://smpt.gmail.com',587,$errstr,10);
echo fgets($fp,128);
fclose($fp);
?>