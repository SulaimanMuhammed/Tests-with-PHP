<?php

// karam zeyad hussein kz17018@auis.edu.krd
// bawan hama salih aziz bh17025@auis.edu.krd



//if($_SESSION['username']!=null){ // this is the code for limiting the user from accessing the page

//this form will give the user the abilty to enter the updated infrmation after he chose a radio button and press on the update button.
echo '<form action="" method="POST"> 
 <h3>please enter the updated task:
 </h3>
 <br>
 <input type="text" name="updateTitle">
 <br>
 <h3>please enter the updated date of that task:</h3>
<input type="date" name="updateDate">
<input type="submit" name="update" value="updating">
<br>';

// this code will update the data of that task that the user have chosen from the radio buttons where the information will be directed to this page from the todo.php page.
if(isset($_POST['update'])){
setcookie($_POST['updateTitle'],$_POST['updateDate'], time() +40000);
}

// }else{
// 	exit( include'login.php'); // this is to re direct to the login page
// }
?>