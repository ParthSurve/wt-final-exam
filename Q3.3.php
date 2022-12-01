<?php
$myfile = fopen("ParthSurve.txt", "w") or die("Unable to open file!");
$txt = "Hi am Parth Surve, A042, from batch 2 and im currently pursuing MCA from MPSTME!\n";
fwrite($myfile, $txt);
$txt = "Parth Surve\n";
fwrite($myfile, $txt);
fclose($myfile);
?>