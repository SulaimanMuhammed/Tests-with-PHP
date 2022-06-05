<?php

// karam zeyad hussein kz17018@auis.edu.krd
//bawan hama salih aziz bh17025@auis.edu.krd





//if($_SESSION['username']!=null){ // this is the code for limiting the user from accessing the page 

// this code is when the user press the deleting button and want to delete a task
if (isset($_POST['delete'])) {

if(isset($_POST['radio'])){
// at this stage, we get the value from the hidden input that will be sent when the user chose a radio button; the hidden value is the title of the task which is the name of the cookie in our case.

$cookieName = $_POST['cookieName'];
setcookie($_POST['cookieName'], null, -3600, '/'); 
unset($_COOKIE[$_POST['cookieName']]);
}
}

// }else{
// 	exit( include'login.php'); // this is to re direct to the login page
// }
?>



