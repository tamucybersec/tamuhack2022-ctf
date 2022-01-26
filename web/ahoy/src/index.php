<?php
if(array_key_exists("user", $_COOKIE)&&preg_match('/administrator/', $_COOKIE["user"])){
        $output=("<h1>gigem{c00kiesC00kiesYummyYum}</h1>");
}else{
        $output=('<h1>user is not set to the base64 decoded representation of YWRtaW5pc3RyYXRvcg==</h1>');
        setcookie("user", 'string', time()+3600); // expires in 1 hour
}
?>

<!DOCTYPE html>
<html>
<body style="background:white">
        <div style="text-align: center">
             <img  src="./img/logo.jpg" width="400">
        </div>
        <div style="text-align:center">
                <?php
                     echo($output);
                ?>
        </div>
</body>
</html>
