<?php
   include ("./header.php");
   ?>
<?php 
   $address = getenv ("REMOTE_ADDR");
   echo "Your IP address is $address.";
   ?>
<?php
   include ("./footer.php");
   ?>