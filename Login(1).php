<?php
#Start sessions with the login page
if(isset($_POST['doLogin']))
{
    session_start();
    $_SESSION['user'] = $_POST['username'];    
}
?>


<div id="login">
 <form id="Login" action="<?=$_SERVER['PHP_SELF']?>" method="POST">
    <input type="text" id="username" name="username" value="username">
    <input type="submit" value="login" name="doLogin">
 </form>
</div>



<?php 

function addUser(){

    $username = $_POST['username'];

    $file = "acct.txt";
    $tuples = file_get_contents($file);
    $tuples .= "\n" . $username ;
    file_put_contents($file, $tuples);
}

?>












