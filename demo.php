<?php
phpinfo();
define("WEBNAME","rewan");
echo "<br>" ."The website name is : ". WEBNAME;
// const WEBNAME="rewan";
// echo WEBNAME;
print "<br>"."The server name is : ".$_SERVER['SERVER_NAME'];
print "<br>"."The server address is : ".$_SERVER['SERVER_ADDR'];
print "<br>"."The server port is : ".$_SERVER['SERVER_PORT'];
ECHO "<br>"."The file name and full path is : ".__FILE__;
echo "<br>";
$age=10;
switch($age){
case ($age<5):
    echo "Stay at home";
    break;
case 5:
    echo "Go to Kindergarden";
    break;
case (($age>=6) and ($age<=12)):
    echo "Go to grade :XXX";
    break;
default:
echo "teenager";
}

?>