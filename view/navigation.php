<?php
  require_once(__DIR__ . "/../model/config.php"); /*adding config.php to navagation.php*/
  ?>
<nav> 
    <ul>
       <li><a href="<?php echo $path . "post.php"?>">Blog Post Form</a></li>          <!--echoing path variable to post.php-->
    </ul>
</nav>