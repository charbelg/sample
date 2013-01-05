<?php

$con = mysql_connect("www.charbz.name:3306","charb413_charbz","8858charbz");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

// some code
echo 'okay everything is fine';

mysql_close($con);
?>