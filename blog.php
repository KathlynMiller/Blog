<html>
<body>

<?php
  require_once(__DIR__ . "/controller/login-verify.php");
  require_once(__DIR__. "/view/header.php");   /*adding header.php file in view folder to blog.php*/
  require_once(__DIR__ . "/view/navigation.php"); /*adding navigation.php file in view folder to blog.php*/
  if(authenticateUser()){
       require_once(__DIR__ . "/controller/create-db.php"); /*adding create-db.php file in controller folder to blog.php*/
  }
  require_once(__DIR__ . "/controller/read-posts.php");
  require_once(__DIR__. "/view/footer.php");    /*adding footer.php file to in view folder blog.php*/
  
?>
</body>
</html>