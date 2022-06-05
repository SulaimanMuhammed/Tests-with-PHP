<?php
// karam zeyad hussein kz17018@auis.edu.krd
//bawan hama salih aziz bh17025@auis.edu.krd



//if($_SESSION['username']!=null){ // this is the code for limiting the user from accessing the page 
	// code...

// this form is for getting the user input and assign then send it to todo.php page inorder to show it to the user
echo "<form action='' method='POST'>
		<p>please enter the task's title:</p>
		<input type='text' name='title'>
		<br>
		<p>please enter the task's date:</p>
		<input type='date' name='date'>
		<input type='submit' name='include' value='add'>
	</form>";

if (isset($_POST['include'])) {
	setcookie( $_POST["title"],$_POST["date"], time() +40000);
    header("Refresh:0");
	
}

// }else{
// 	exit( include'login.php'); // this is to re direct to the login page
// }
  ?>
  