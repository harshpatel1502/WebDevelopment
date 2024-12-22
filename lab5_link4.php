<?php 
   include ("./header.php");
   ?>
<?php 
   $agent = getenv("HTTP_USER_AGENT");
   echo "You are using $agent.";
   ?>
<?php
   include ("./footer.php");
   ?>