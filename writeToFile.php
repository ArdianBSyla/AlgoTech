<?php
if(isset($_POST['submit']))
{
    $email = $_POST['email'];
    // a is for append
    $file = fopen('/var/www/html/BI_20-21_Gr6/input.txt', "a") or die("Unable to open file!");
    fwrite($file,$email);
    fclose($file); 
    print_r(error_get_last());
}
?>
<form action= "" method="post" name="form">
<input type="text" name="email">
<br>
<br>
<input type="submit" name="submit" value="submit"><br>
</form>