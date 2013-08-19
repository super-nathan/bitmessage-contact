<?php
$subject = $_POST['subject'];
$detail = $_POST['detail'];
$name = $_POST['name'];
$contact = $_POST['contact'];

$signature="\n"."\n".$name." ".$contact;

$message=$detail." ".$signature;

$var1= '"'.$subject.'"';
$var2= '"'.$message.'"';

$pyvar=$var1." ".$var2;

$pyvar= '"'.$pyvar.'"';

$send_contact=exec("python bm.py $var1 $var2 ");

if($send_contact){
echo "We've recived your message";
}
else {
echo "ERROR";
}

?>
