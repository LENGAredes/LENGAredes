<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Expresiones Regulares</title>
</head>

<body>
<?php
function validaMail($mail)
{
    if( !preg_match('/^[^0-9][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[@][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{2,4}$/', $mail))
    {
        return false;
    }
    return true;
}
$mail = "francisco123.arce@yahoo";
if(validaMail($mail)){
	print "Tu mail $mail es correcto";
} else {
	print "Tu mail $mail es incorrecto";
}

?>
</body>
</html>