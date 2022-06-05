<?php


// karam zeyad hussein kz17018@auis.edu.krd
//bawan hama salih aziz bh17025@auis.edu.krd


// this source for refreshin the page 'add.php'
//https://www.geeksforgeeks.org/refresh-a-page-using-php/


// this source was used for limiting the unauthenticated users to access the pages
//https://www.youtube.com/watch?v=3jfBOD5Mw0Q&t=8s


?>

<?php
//if($_SESSION['username']!=null){ // this is the code for limiting the user from accessing the page 

	

	echo '<form action="todo.php" method="POST">

		<input type="submit" name="add" value="add">

		<input type="submit" name="delete" value="delete">

		<input type="submit" name="update" value="update">

	  </form>';
	echo '<br';  

echo "<form action='login.php' method='POST'>

<input type='submit' name='logout' value='logout'>

</form>";

//////////////////////////


//this code is when the user press the logout button 
if (isset($_POST['logout'])) {

header("location:/login.php"); 

exit;

}



////////////////////////////////


// this code is when the user press the add button to add a new task; it will call the add.php page to add the new task.

 if (isset($_POST['add'])) {

	include 'add.php';
}


////////////////////////////////



//  this code is when the user press the delete button to delete an existing task; it will call the delete.php page to delete a task.

if (isset($_POST['delete'])) {

include'delete.php';
}


///////////////////////////////


// this code is when the user press the update button to update an existing task; it will call the updating.php page to update a task.

if (isset($_POST['update'])) {

include'updating.php';

}

//////////////////////////////



// is code is for adding the new task to a cookie; when the user press the add button in the add.php page this code will run and will include the new data to a cookie

if (isset($_POST['include'])) {

include 'add.php';

	setcookie($_POST["title"],$_POST["date"], time() +40000);
}

/////////////////////////////////



//at this stage we are assining and outputting the cookies where it contain the title and the due date of the task
$x=1;
foreach ($_COOKIE as $key=>$value)

  {
$e=$key;

	$taskss="<p><b>Task$x:</b> $key <b> Due on: </b>.$value</p>";

	$x++;

	//this form is to send and show the taskes and the due date
echo"<form action='add.php' method='POST'>
			<input type='radio' name='radio' value =$taskss
				<input type= 'hidden' name= 'hid' value= 'hi'
					<br>
						</form>";

//this form is to send the cookie name or the title of the task to the deleting and updating page
echo"<form action='delete.php' method='POST'>
				<input type= 'hidden' name= 'cookieName' value= $key 
					<br>
						</form>";

}

  
// }else{
// 	exit( include'login.php'); // this is to re direct to the login page
// }


?>
