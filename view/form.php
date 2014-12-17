<?php
 require_once(__DIR__ . "/../model/config.php"); /*adding config.php file*/
 require_once(__DIR__ . "/../controller/login-verify.php"); /*adding login-verify.php file*/

 if(!authenticateUser()) {
 	header("Location: " . $path . "blog.php"); /*protect this file*/
 	die();
 }

?>

<h1>Create Blog Post</h1>
 
 <form method="post" action="<?php echo $path . "controller/create-post.php"; ?>"> <!--added a method -->
 	<div>
 	<label for="title">Title: </label> <!-- label for title-->
 	<input type="text" name="title"/>
 	</div>

 	<div>
 	<label for="post">Post: </label> <!-- label for post-->
 	<textarea name="post"></textarea>
   </div>

    <div>
    	<button type ="submit">Submit</button> <!-- made a submit button -->
    </div>
 </form>
