<?php 
$dat = new DateTime('now', new DateTimeZone('Asia/Kolkata'));
$date=$dat->format('H');
if($date < 12) 
  echo "Good morning to everyone"; 
else if($date < 17) 
  echo "Good afternoon to everyone";
else if($date<20)
  echo "Good evening to everyone"; 
else 
  echo "Good night to everyone"; 
?>